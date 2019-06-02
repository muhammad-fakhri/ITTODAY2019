<?php

namespace App\Http\Controllers;
use App\Anggota1;
use App\Anggota2;
use App\KetuaTim;
use App\Team;
use Auth;
use Illuminate\Http\Request;

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
		return view('pembayaran', ['title' => 'Pembayaran | IT TODAY 2019', 'tipe' => true, 'upload_page' => true]);
	}

	public function showProposal() {
		return view('proposal', ['title' => 'Proposal | IT TODAY 2019', 'tipe' => true, 'upload_page' => true]);
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
		if ($uploadedFoto && !$data->namaFoto) {
			$pathFoto = $uploadedFoto->store('public/foto');
			$data->namaFoto = $uploadedFoto->getClientOriginalName();
			$data->alamatFoto = $pathFoto;
		}

		if ($uploadedSKMA && !$data->namaSKMA) {
			$pathSKMA = $uploadedSKMA->store('public/skma');
			$data->namaSKMA = $uploadedSKMA->getClientOriginalName();
			$data->alamatSKMA = $pathSKMA;
		}

		if ($uploadedKTM && !$data->namaKTM) {
			$pathKTM = $uploadedKTM->store('public/ktm');
			$data->namaKTM = $uploadedKTM->getClientOriginalName();
			$data->alamatKTM = $pathKTM;
		}

		$data->save();
		return redirect()->back();
		# return redirect('/data-diri/' . $back);
	}

	public function updateDataTeam(Request $req, $id) {
		$Team = Team::find($id);
		$Team->namaTim = $req->namaTim;
		$Team->jenisTim = $req->jenisTim;
		$Team->save();
		return redirect()->back();
	}
}
