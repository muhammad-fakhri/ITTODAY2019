<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GuestController extends Controller
{
    public function index()
    {
    	return view('index', ['title'=>'IT TODAY 2019', 'tipe'=>true]);
    }

    public function apps()
    {
    	return view('apps', ['title'=>'APPSTODAY']);
    }

    public function hack()
    {
    	return view('hack', ['title'=>'HACKTODAY']);
    }

    public function daming()
    {
    	return view('daming', ['title'=>'DATA SCIENCE COMPETITION']);
    }

    public function seminar()
    {
        return view('seminar', ['title'=>'SEMINAR']);
    }

    public function workshop()
    {
        return view('workshop', ['title'=>'WORKSHOP']);
    }

    public function downApps()
    {
        return Storage::download('public/RULEBOOK_APPSTODAY.pdf');
    }

    public function downHack()
    {
        return Storage::download('public/RULEBOOK_HACKTODAY.pdf');
    }

    public function downDSC()
    {
        return Storage::download('public/RULEBOOK_DSC.pdf');
    }
}
