<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use App\KetuaTim;
use App\Anggota1;
use App\Anggota2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function show($id)
    {
    	$data = Team::find($id);
    	// dd($data);
    	$data1 = KetuaTim::find($data->idKetuaTim);
    	$data2 = Anggota1::find($data->idAnggota1);
    	$data3 = Anggota2::find($data->idAnggota2);
    	return view('admin.showTeam', ['dataTeam'=>$data, 'dataKetua' => $data1, 'dataAnggota1'=>$data2, 'dataAnggota2'=>$data3, 'page'=>$data->namaTim]);
    }
}
