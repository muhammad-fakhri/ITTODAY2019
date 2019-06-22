<?php

namespace App\Http\Controllers;
use App\Anggota1;
use App\Anggota2;
use App\Bayar;
use App\Berkas;
use App\KetuaTim;
use App\Team;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Validator;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware(['auth', 'verified']);
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
		return view('home', ['title' => 'Dashboard | IT TODAY 2019', 'tipe' => true]);
	}

	public function showDataDiri($key) {
		$user = Auth::user();
		$dataTeam = Team::find($user->idTim);
		$dataKetua = KetuaTim::find($dataTeam->idKetuaTim);
		$dataAnggota1 = Anggota1::find($dataTeam->idAnggota1);
		$dataAnggota2 = Anggota2::find($dataTeam->idAnggota2);
		switch ($key) {
		case 'ketua-tim':
			$title = 'Ketua Tim | IT TODAY 2019';
			$number = 1;
			$data = $dataKetua;
			break;
		case 'anggota1':
			$title = 'Anggota 1 | IT TODAY 2019';
			$number = 2;
			$data = $dataAnggota1;
			break;
		case 'anggota2':
			$title = 'Anggota 2 | IT TODAY 2019';
			$number = 3;
			$data = $dataAnggota2;
			break;
		default:
			$title = 'Ketua Tim | IT TODAY 2019';
			$number = 1;
			$data = $dataKetua;
			break;
		}
		// dd($data);
		return view('profil', ['title' => $title, 'tipe' => true, 'profil_page' => $number, 'Peserta' => $data, 'Team' => $dataTeam]);
	}

	public function showPembayaran() {
		$user = Auth::user();
		$dataBayar = Bayar::where('idTim', '=', $user->idTim)->first();
		$dataTeam = Team::where('id','=', $user->idTim)->first();
		return view('pembayaran', [
			'title' => 'Pembayaran | IT TODAY 2019', 
			'tipe' => true, 
			'upload_page' => true, 
			'Bayar' => $dataBayar,
			'Team' => $dataTeam
		]);
	}

	public function postPembayaran(Request $req) {
		//pesan validasi
		$messages = [
			'bayar.max' => 'Ukuran maksimal berkas pembayaran yang bisa di upload adalah 2MB, mohon ganti atau resize berkas pembayaran.',
			'bayar.image' => 'Berkas pembayaran harus dalam format jpeg, png, jpg, atau svg.',
			'bayar.mimes:jpeg,png,jpg,svg' => 'Berkas pembayaran harus dalam format jpeg, png, jpg, atau svg.',
		];

		//validasi input
		$validator = Validator::make($req->all(), [
			'bayar' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
		], $messages)->validate();

		$user = Auth::user();
		$bayar = Bayar::where('idTim', '=', $user->idTim)->first();
		$team = Team::where('id','=', $user->idTim)->first();
		$uploadedBayar = $req->file('bayar');
		if ($uploadedBayar) {
			if ($team->verifBayar == 1) {
				return redirect()->back()->with('alert-bayar','Bukti pembayaran sudah terverifikasi, anda tidak diperkenankan untuk mengganti bukti pembayaran yang sudah ada.');
			}
			if ($bayar->namaBayar && $bayar->alamatBayar) {
				Storage::delete($bayar->alamatBayar);
				$bayar->namaBayar == null;
				$bayar->alamatBayar == null;
			}
			//using symlink
			// $pathBayar = $uploadedFoto->store('public/bayar');
			//not using symlink
			$pathBayar = $uploadedBayar->store('bayar');
			$bayar->namaBayar = $uploadedBayar->getClientOriginalName();
			$bayar->alamatBayar = $pathBayar;
		}
		$bayar->save();
		$team->verifBayar = 2;
		$team->save();
		return redirect()->back();
	}

	public function showBerkas() {
		$jenisLomba = Auth::user()->jenisTim;
		$dataBerkas = Berkas::where('idTim', '=', Auth::user()->idTim)->first();
		switch ($jenisLomba) {
		case 1:
			$berkas = 'Proposal';
			break;
		case 2:
			$berkas = 'WriteUp';
			break;
		case 3:
			$berkas = 'Makalah';
			break;
		default:
			$berkas = 'Berkas';
			break;
		}
		return view('berkas', ['title' => $berkas . ' | IT TODAY 2019', 'tipe' => true, 'upload_page' => true, 'Lomba' => $jenisLomba, 'Berkas' => $dataBerkas]);
	}

	public function postBerkas(Request $req) {
		//pesan validasi
		$messages = [
			'berkas.max' => 'Ukuran berkas yang bisa diupload adalah maksimal 10MB',
		];

		//validasi input
		$validator = Validator::make($req->all(), [
			'berkas' => 'max:10240',
		], $messages)->validate();

		$data = Berkas::where('idTim', '=', Auth::user()->idTim)->first();
		$uploadedBerkas = $req->file('berkas');
		if ($uploadedBerkas) {
			if ($data->namaBerkas && $data->alamatBerkas) {
				Storage::delete($data->alamatBerkas);
				$data->namaBerkas == null;
				$data->alamatBerkas == null;
			}
			//using symlink
			// $pathBerkas = $uploadedBerkas->store('public/berkas');
			//not using symlink
			$pathBerkas = $uploadedBerkas->store('upload_berkas');
			$data->namaBerkas = $uploadedBerkas->getClientOriginalName();
			$data->alamatBerkas = $pathBerkas;
		}
		$data->linkVideo = $req->linkVideo;
		$data->save();
		return redirect()->back();
	}
 
	public function updateDataDiri(Request $req, $key, $id) {
		//pesan validasi
		$messages = [
			'foto.max' => 'Ukuran maksimal foto yang diupload adalah 2MB, mohon ganti atau resize foto terlebih dahulu.',
			'foto.image' => 'Berkas foto harus dalam format jpeg, png, jpg, atau svg.',
			'foto.mimes:jpeg,png,jpg,svg' => 'Berkas foto harus dalam format jpeg, png, jpg, atau svg.',
			'ktm.max' => 'Ukuran maksimal foto yang diupload adalah 2MB, mohon ganti atau resize foto terlebih dahulu.',
			'ktm.image' => 'Berkas KTM harus dalam format jpeg, png, jpg, atau svg.',
			'ktm.mimes:jpeg,png,jpg,svg' => 'Berkas KTM harus dalam format jpeg, png, jpg, atau svg.',
			'skma.max' => 'Ukuran maksimal berkas yang diupload adalah 2MB, mohon ganti atau kompres terlebih dahulu.',
		];

		//validasi input
		$validator = Validator::make($req->all(), [
			'foto' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
			'ktm' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
			'skma' => 'max:2048',
		], $messages)->validate();

		switch ($key) {
		case 1:
			$data = KetuaTim::find($id);
			$back = 'ketua-tim';
			break;
		case 2:
			$data = Anggota1::find($id);
			$back = 'anggota1';
			break;
		case 3:
			$data = Anggota2::find($id);
			$back = 'anggota2';
			break;
		default:
			return redirect('/data-diri/ketua-tim')->with('alert-warning', 'Mohon maaf ada error yang terjadi, mohon coba beberapa saat lagi.');
			break;
		}

		//Ambil data team
		$team = Team::where('id','=', Auth::user()->idTim)->first();

		$data->nama = $req->nama;
		$data->nim = $req->nim;
		$data->tmptLahir = $req->tmptLahir;
		$data->tglLahir = $req->tglLahir;
		$data->jenKel = $req->jenKel;
		$data->asalInstansi = $req->asalInstansi;
		$data->fakultas = $req->fakultas;
		$data->jurusan = $req->jurusan;
		$data->email = $req->email;
		$data->noHP = $req->noHP;
		$data->noWA = $req->noWA;
		$data->idLine = $req->idLine;
		$uploadedFoto = $req->file('foto');
		$uploadedSKMA = $req->file('skma');
		$uploadedKTM = $req->file('ktm');
		if ($uploadedFoto) {
			switch ($key) {
			case 1:
				if ($team->verifFotoKetua == 1) {
					return redirect()->back()->with('foto-alert','Foto telah terverifikasi, anda tidak diperkenankan untuk mengganti foto yang sudah ada.');
				}
				$team->verifFotoKetua = 2;
				break;
			case 2:
				if ($team->verifFoto1 == 1) {
					return redirect()->back()->with('foto-alert','Foto telah terverifikasi, anda tidak diperkenankan untuk mengganti foto yang sudah ada.');
				}
				$team->verifFoto1 = 2;
				break;
			case 3:
				if ($team->verifFoto2 == 1) {
					return redirect()->back()->with('foto-alert','Foto telah terverifikasi, anda tidak diperkenankan untuk mengganti foto yang sudah ada.');
				}
				$team->verifFoto2 = 2;
				break;
			default:
				return redirect('/data-diri/ketua-tim')->with('alert-warning', 'Mohon maaf ada error yang terjadi, mohon coba beberapa saat lagi.');
				break;
			}
			if ($data->namaFoto && $data->alamatFoto) {
				Storage::delete($data->alamatFoto);
				$data->namaFoto == null;
				$data->alamatFoto == null;
			}
			//using symlink
			// $pathFoto = $uploadedFoto->store('public/foto');
			//not using symlink
			$pathFoto = $uploadedFoto->store('foto');
			$data->namaFoto = $uploadedFoto->getClientOriginalName();
			$data->alamatFoto = $pathFoto;
		}

		if ($uploadedSKMA) {
			switch ($key) {
			case 1:
				if ($team->verifSKMAKetua == 1) {
					return redirect()->back()->with('skma-alert','Bukti Mahasiswa/Siswa telah terverifikasi, anda tidak diperkenankan untuk mengganti berkas yang sudah ada.');
				}
				$team->verifSKMAKetua = 2;
				break;
			case 2:
				if ($team->verifSKMA1 == 1) {
					return redirect()->back()->with('skma-alert','Bukti Mahasiswa/Siswa telah terverifikasi, anda tidak diperkenankan untuk mengganti berkas yang sudah ada.');
				}
				$team->verifSKMA1 = 2;
				break;
			case 3:
				if ($team->verifSKMA2 == 1) {
					return redirect()->back()->with('skma-alert','Bukti Mahasiswa/Siswa telah terverifikasi, anda tidak diperkenankan untuk mengganti berkas yang sudah ada.');
				}
				$team->verifSKMA2 = 2;
				break;
			default:
				return redirect('/data-diri/ketua-tim')->with('alert-warning', 'Mohon maaf ada error yang terjadi, mohon coba beberapa saat lagi.');
				break;
			}
			if ($data->namaSKMA && $data->alamatSKMA) {
				Storage::delete($data->alamatSKMA);
				$data->namaSKMA == null;
				$data->alamatSKMA == null;
			}
			//using symlink
			// $pathSKMA = $uploadedSKMA->store('public/skma');
			//not using symlink
			$pathSKMA = $uploadedSKMA->store('skma');
			$data->namaSKMA = $uploadedSKMA->getClientOriginalName();
			$data->alamatSKMA = $pathSKMA;
		}

		if ($uploadedKTM) {
			switch ($key) {
			case 1:
				if ($team->verifKTMKetua == 1) {
					return redirect()->back()->with('ktm-alert','KTM/Kartu Pelajar telah terverifikasi, anda tidak diperkenankan untuk mengganti foto KTM/Kartu Pelajar yang sudah ada.');
				}
				$team->verifKTMKetua = 2;
				break;
			case 2:
				if ($team->verifKTM1 == 1) {
					return redirect()->back()->with('ktm-alert','KTM/Kartu Pelajar telah terverifikasi, anda tidak diperkenankan untuk mengganti foto KTM/Kartu Pelajar yang sudah ada.');
				}
				$team->verifKTM1 = 2;
				break;
			case 3:
				if ($team->verifKTM2 == 1) {
					return redirect()->back()->with('ktm-alert','KTM/Kartu Pelajar telah terverifikasi, anda tidak diperkenankan untuk mengganti foto KTM/Kartu Pelajar yang sudah ada.');
				}
				$team->verifKTM2 = 2;
				break;
			default:
				return redirect('/data-diri/ketua-tim')->with('alert-warning', 'Mohon maaf ada error yang terjadi, mohon coba beberapa saat lagi.');
				break;
			}
			if ($data->namaKTM && $data->alamatKTM) {
				Storage::delete($data->alamatKTM);
				$data->namaKTM == null;
				$data->alamatKTM == null;
			}
			//using symlink
			// $pathKTM = $uploadedKTM->store('public/ktm');
			//not using symlink
			$pathKTM = $uploadedKTM->store('ktm');
			$data->namaKTM = $uploadedKTM->getClientOriginalName();
			$data->alamatKTM = $pathKTM;
		}
		$team->save();
		$data->save();
		return redirect()->back();
	}

	public function updateDataTeam(Request $req, $id) {
		$messages = [
			'namaTim.max' => 'Jumlah maksimal karakter untuk nama tim adalah 50, mohon pilih nama tim yang lain.',
			'namaTim.required' => 'Mohon masukkan nama tim yang kurang dari 50 karakter.',
		];

		$validator = Validator::make($req->all(), [
			'namaTim' => 'required|max:50',
			'jenisTim' => 'required',
		], $messages)->validate();

		$Team = Team::find($id);
		$data = Team::where('namaTim', '=', $req->namaTim)->first();
		//kalo udh ada yang make nama tim nya (unique custom validator)
		if ($data) {
			if ($Team->id != $data->id) {
				return redirect()->back()->with('alert-udh', 'Nama tim ini sudah dipakai, silakan gunakan nama tim yang lain.');
			}
		}

		$Team->namaTim = $req->namaTim;
		$Team->jenisTim = $req->jenisTim;
		$Team->save();

		//update data user
		$user = Auth::user();
		$user->namaTim = $req->namaTim;
		$user->jenisTim = $req->jenisTim;
		$user->save();

		//update data pembayaran
		$bayar = Bayar::where('idTim', '=', $id)->first();
		$bayar->namaTim = $req->namaTim;
		$bayar->jenisTim = $req->jenisTim;
		$bayar->save();

		//update data berkas
		$berkas = Berkas::where('idTim', '=', $id)->first();
		$berkas->namaTim = $req->namaTim;
		$berkas->jenisTim = $req->jenisTim;

		// jika jenis tim berganti dari appstoday ke mata lomba lain
		//maka linkVideo akan dihapus
		if ($req->jenisTim != 1) {
			$berkas->linkVideo = null;
		}
		$berkas->save();
		return redirect()->back();
	}
}
