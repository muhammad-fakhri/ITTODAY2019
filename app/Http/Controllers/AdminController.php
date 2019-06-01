<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller {
	public function index() {
		return view('admin.home');
	}

	public function showLoginForm() {
		return view('admin.login', ['title' => 'Admin Login | IT TODAY 2019', 'tipe' => true]);
	}

	public function showRegisterForm() {
		return view('admin.register', ['title' => 'Admin Register | IT TODAY 2019', 'tipe' => true]);
	}

	public function loginPost(Request $request) {
		$email = $request->email;
		$password = $request->password;
		$data = Admin::where('email', '=', $email)->first();
		if ($data) {
			if (Hash::check($password, $data->password)) {
				Auth::login($data);
				Session::put('name', $data->name);
				return redirect('/maribakuhantam');
			} else {
				return redirect('/maribakuhantam/login')->with('status', 'Password anda salah !');
			}
		} else {
			return redirect('/maribakuhantam/login')->with('status', 'Tidak ada akun admin dengan email ini !');
		}
	}

	public function registerPost(Request $request) {
		$data = new Admin();
		$data->name = $request->name;
		$data->email = $request->email;
		$data->password = bcrypt($request->password);
		$password_confirm = bcrypt($request->password_confirmation);
		$email = Admin::where('email', '=', $request->email)->first();
		if ($email) {
			return redirect('/maribakuhantam/register')->with('status', 'Email ini sudah ada yang menggunakan !');

		} else if ($request->password != $request->password_confirmation) {
			return redirect('/maribakuhantam/register')->with('status', 'Password tidak sama !');
		}
		$data->save();
		return redirect('/maribakuhantam/login')->with('status', 'Kamu berhasil terdaftar !');
	}
}
