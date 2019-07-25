<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Auth;
use App\Anggota1;
use App\Anggota2;
use App\Bayar;
use App\Berkas;
use App\KetuaTim;
use App\Team;
use App\User;

class GuestController extends Controller
{
	public function index()
	{
		return view('index', ['title' => 'IT TODAY 2019', 'tipe' => true]);
	}

	public function apps()
	{
		return view('apps', ['title' => 'AppsToday | IT TODAY 2019']);
	}

	public function hack()
	{
		return view('hack', ['title' => 'HackToday | IT TODAY 2019']);
	}

	public function daming()
	{
		return view('daming', ['title' => 'Data Science Competition | IT TODAY 2019']);
	}

	public function seminar()
	{
		return view('seminar', ['title' => 'Seminar | IT TODAY 2019']);
	}

	public function workshop()
	{
		return view('workshop', ['title' => 'Workshop | IT TODAY 2019']);
	}

	public function about()
	{
		return view('about', ['title' => 'Tentang | IT TODAY 2019']);
	}

	public function downApps()
	{
		return Storage::download('rulebook/RULEBOOK_APPSTODAY.pdf');
	}

	public function downHack()
	{
		return Storage::download('rulebook/RULEBOOK_HACKTODAY.pdf');
	}

	public function downDSC()
	{
		return Storage::download('rulebook/RULEBOOK_DSC.pdf');
	}

	public function showHapusAkun() {
		$dataTeam = Team::all();
		return view('hapus', 
			[
				'dataTeam' => $dataTeam, 
				'page' => 'Hapus Akun'
			]);
	}

	// public function hapusAkun($id)
	// {
	// 	$Anggota1 = Anggota1::where('idTim',$id)->first();
	// 	$Anggota2 = Anggota2::where('idTim',$id)->first();
	// 	$Bayar = Bayar::where('idTim',$id)->first();
	// 	$Berkas = Berkas::where('idTim',$id)->first();
	// 	$Ketua = KetuaTim::where('idTim',$id)->first();
	// 	$Team = Team::find($id);
	// 	$User = User::where('idTim',$id)->first();
		
	// 	//hapus berkas pembayaran
	// 	Storage::delete($Bayar->alamatBayar);

	// 	// hapus berkas lomba
	// 	Storage::delete($Berkas->alamatBerkas);

	// 	//hapus berkas ketua tim
	// 	Storage::delete($Ketua->alamatFoto);
	// 	Storage::delete($Ketua->alamatSKMA);
	// 	Storage::delete($Ketua->alamatKTM);

	// 	//hapus berkas anggota 1
	// 	Storage::delete($Anggota1->alamatFoto);
	// 	Storage::delete($Anggota1->alamatSKMA);
	// 	Storage::delete($Anggota1->alamatKTM);

	// 	//hapus berkas anggota 2
	// 	Storage::delete($Anggota2->alamatFoto);
	// 	Storage::delete($Anggota2->alamatSKMA);
	// 	Storage::delete($Anggota2->alamatKTM);

	// 	$Berkas->delete();
	// 	$Bayar->delete();
	// 	$Ketua->delete();
	// 	$Anggota1->delete();
	// 	$Anggota2->delete();
	// 	$Team->delete();
	// 	$User->delete();
	// 	return redirect()->back();
	// }
}
