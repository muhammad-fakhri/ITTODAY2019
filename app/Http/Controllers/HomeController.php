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
		return view('home', ['title' => 'IT TODAY 2019', 'tipe' => true]);
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
		return view('profil', ['title' => $title, 'tipe' => true, 'profil_page' => $number, 'Peserta' => $data, 'Team' => $dataTeam]);
	}

	public function showPembayaran() {
		$user = Auth::user();
		$dataBayar = Bayar::where('idTim', '=', $user->idTim)->first();
		return view('pembayaran', ['title' => 'Pembayaran | IT TODAY 2019', 'tipe' => true, 'upload_page' => true, 'Bayar' => $dataBayar]);
	}

	public function postPembayaran(Request $req) {
		$user = Auth::user();
		$bayar = Bayar::where('idTim', '=', $user->idTim)->first();
		// dd($bayar);
		$uploadedBayar = $req->file('bayar');
		if ($uploadedBayar) {
			if ($bayar->namaBayar && $bayar->alamatBayar) {
				Storage::delete($bayar->alamatBayar);
				$bayar->namaBayar == null;
				$bayar->alamatBayar == null;
			}
			$pathBayar = $uploadedBayar->store('public/bayar');
			$bayar->namaBayar = $uploadedBayar->getClientOriginalName();
			$bayar->alamatBayar = $pathBayar;
		}
		$bayar->save();
		return redirect()->back();
	}

	public function showBerkas() {
		$jenisLomba = Auth::user()->jenisTim;
		$dataBerkas = Berkas::where('idTim', '=', Auth::user()->idTim)->first();
		// dd($dataBerkas);
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
		$data = Berkas::where('idTim', '=', Auth::user()->idTim)->first();
		// dd($data);
		$uploadedBerkas = $req->file('berkas');
		if ($uploadedBerkas) {
			if ($data->namaBerkas && $data->alamatBerkas) {
				Storage::delete($data->alamatBerkas);
				$data->namaBerkas == null;
				$data->alamatBerkas == null;
			}
			$pathBerkas = $uploadedBerkas->store('public/berkas');
			$data->namaBerkas = $uploadedBerkas->getClientOriginalName();
			$data->alamatBerkas = $pathBerkas;
		}
		$data->linkVideo = $req->linkVideo;
		$data->save();
		return redirect()->back();
	}

	public function updateDataDiri(Request $req, $key, $id) {
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
			if ($data->namaFoto && $data->alamatFoto) {
				Storage::delete($data->alamatFoto);
				$data->namaFoto == null;
				$data->alamatFoto == null;
			}
			$pathFoto = $uploadedFoto->store('public/foto');
			$data->namaFoto = $uploadedFoto->getClientOriginalName();
			$data->alamatFoto = $pathFoto;
		}

		if ($uploadedSKMA) {
			if ($data->namaSKMA && $data->alamatSKMA) {
				Storage::delete($data->alamatSKMA);
				$data->namaSKMA == null;
				$data->alamatSKMA == null;
			}
			$pathSKMA = $uploadedSKMA->store('public/skma');
			$data->namaSKMA = $uploadedSKMA->getClientOriginalName();
			$data->alamatSKMA = $pathSKMA;
		}

		if ($uploadedKTM) {
			if ($data->namaKTM && $data->alamatKTM) {
				Storage::delete($data->alamatKTM);
				$data->namaKTM == null;
				$data->alamatKTM == null;
			}
			$pathKTM = $uploadedKTM->store('public/ktm');
			$data->namaKTM = $uploadedKTM->getClientOriginalName();
			$data->alamatKTM = $pathKTM;
		}

		$data->save();
		return redirect()->back();
	}

	public function updateDataTeam(Request $req, $id) {
		$messages = [
			// 'unique' => 'Nama tim ini sudah dipakai, silakan gunakan nama tim yang lain.',
			'max' => 'Jumlah maksimal karakter untuk nama tim adalah 50, mohon pilih nama tim yang lain.',
			'namaTim.required' => 'Mohon masukkan nama tim yang kurang dari 50 karakter.',
		];

		$validator = Validator::make($req->all(), [
			'namaTim' => 'required|max:50',
			'jenisTim' => 'required',
		], $messages)->validate();

		$Team = Team::find($id);
		$data = Team::where('namaTim', '=', $req->namaTim)->first();
		// dd($data);
		//kalo udh ada yang make nama tim nya (unique custom validator)
		if ($data) {
			if ($Team->id != $data->id) {
				return redirect()->back()->with('alert', 'Nama tim ini sudah dipakai, silakan gunakan nama tim yang lain.');
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
