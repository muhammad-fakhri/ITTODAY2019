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
    	return view('apps', ['title'=>'Appstoday | IT TODAY 2019 ']);
    }

    public function hack()
    {
    	return view('hack', ['title'=>'Hacktoday | IT TODAY 2019 ']);
    }

    public function daming()
    {
    	return view('daming', ['title'=>'Data Science Competition | IT TODAY 2019']);
    }

    public function seminar()
    {
        return view('seminar', ['title'=>'Seminar | IT TODAY 2019 ']);
    }

    public function workshop()
    {
        return view('workshop', ['title'=>'Workshop | IT TODAY 2019 ']);
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
