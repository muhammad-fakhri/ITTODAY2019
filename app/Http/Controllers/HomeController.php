<?php

namespace App\Http\Controllers;
use Auth;

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

	public function showDataDiri($id) {
		switch ($id) {
		case 'ketua-tim':
			return view('profil', ['title' => 'Ketua Tim | IT TODAY 2019', 'tipe' => true, 'profil_page' => 1]);
			break;
		case 'anggota1':
			return view('profil', ['title' => 'Anggota 1 | IT TODAY 2019', 'tipe' => true, 'profil_page' => 2]);
			break;
		case 'anggota2':
			return view('profil', ['title' => 'Anggota 2 | IT TODAY 2019', 'tipe' => true, 'profil_page' => 3]);
			break;
		default:
			return view('profil', ['title' => 'Ketua Tim | IT TODAY 2019', 'tipe' => true, 'profil_page' => 1]);
			break;
		}
	}

	public function showPembayaran()
	{
		return view('pembayaran', ['title'=>'Pembayaran | IT TODAY 2019', 'tipe'=>true]);
	}
}
