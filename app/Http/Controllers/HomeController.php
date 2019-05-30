<?php

namespace App\Http\Controllers;

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
		//ini yang bener
		// return view('home', ['title' => 'Beranda', 'tipe' => true]);

		//ini untuk testing
		return view('index', ['title' => 'Beranda', 'tipe' => true]);
	}
}
