<?php

namespace App\Http\Controllers\Auth;

use App\Anggota1;
use App\Anggota2;
use App\Bayar;
use App\Berkas;
use App\Http\Controllers\Controller;
use App\KetuaTim;
use App\Team;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use \Illuminate\Http\Request;

class RegisterController extends Controller {
	/*
		    |--------------------------------------------------------------------------
		    | Register Controller
		    |--------------------------------------------------------------------------
		    |
		    | This controller handles the registration of new users as well as their
		    | validation and creation. By default this controller uses a trait to
		    | provide this functionality without requiring any additional code.
		    |
	*/

	use RegistersUsers;

	/**
	 * Where to redirect users after registration.
	 *
	 * @var string
	 */
	protected $redirectTo = '/dashboard';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('guest');
	}

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	protected function validator(array $data) {
		return Validator::make($data, [
			'name' => ['required', 'string', 'max:255'],
			'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
			'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return \App\User
	 */
	protected function create(array $data) {
		$user = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => Hash::make($data['password']),
		]);

		//buat tim baru
		$team = new Team;
		$team->jenisTim = 0;
		$team->save();

		//set idtim dan nama tim ke dari model tim ke model user
		$dataUser = User::where('email', '=', $user->email)->first();
		$dataUser->idTim = $team->id;
		$dataUser->jenisTim = 0;
		$dataUser->baruDaftar = 1;
		$dataUser->save();

		//buat data ketua tim baru
		$ketua = new KetuaTim;
		$ketua->idTim = $team->id;
		$ketua->jenKel = 2;
		$ketua->save();

		//buat data anggota 1 baru
		$anggota1 = new Anggota1;
		$anggota1->idTim = $team->id;
		$anggota1->jenKel = 2;
		$anggota1->save();

		//buat data anggota 2 baru
		$anggota2 = new Anggota2;
		$anggota2->idTim = $team->id;
		$anggota2->jenKel = 2;
		$anggota2->save();

		//simpan idketuatim, idanggota1, dan idanggota2 ke model team
		$dataTeam = Team::find($team->id);
		$dataTeam->idKetuaTim = $ketua->id;
		$dataTeam->idanggota1 = $anggota1->id;
		$dataTeam->idanggota2 = $anggota2->id;
		$dataTeam->save();

		//buat data pembayaran yang baru
		$bayar = new Bayar;
		$bayar->idTim = $team->id;
		$bayar->jenisTim = 0;
		$bayar->save();

		//buat data berkas baru
		$berkas = new Berkas;
		$berkas->idTim = $team->id;
		$berkas->jenisTim = 0;
		$berkas->save();

		return $user;
	}

	protected function registered(Request $request, $user) {
		$this->guard()->logout();
		return view('auth.verify', ['title' => 'Verify Email | IT TODAY 2019', 'tipe' => true]);
	}

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function showRegistrationForm() {
		return view('auth.register', ['title' => 'Daftar | IT TODAY 2019', 'login' => false, 'register' => true, 'tipe' => true, 'auth_page' => true]);
	}
}
