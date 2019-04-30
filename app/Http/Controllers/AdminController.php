<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Team;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function main(){
        $user = Team::all();
        return view('adminhome',compact('user'));
    }
    public function detail($id){
        $user = Team::where('id',$id)->first();
        return view('admindetail',compact('user'));
    }
    public function verifyktm($id){
        $user = Team::where('id',$id)->first();
        $user->verify_ktm = 1;
        $user->save();
        return redirect()->back();
    }
    public function verifyletter($id){
        $user = Team::where('id',$id)->first();
        $user->verify_letter = 1;
        $user->save();
        return redirect()->back();
    }
    public function verifypayment($id){
        $user = Team::where('id',$id)->first();
        $user->verify_payment = 1;
        $user->save();
        return redirect()->back();
    }
    public function unverifyktm($id){
        $user = Team::where('id',$id)->first();
        $user->verify_ktm = 0;
        $user->save();
        return redirect()->back();
    }
    public function unverifyletter($id){
        $user = Team::where('id',$id)->first();
        $user->verify_letter = 0;
        $user->save();
        return redirect()->back();
    }
    public function unverifypayment($id){
        $user = Team::where('id',$id)->first();
        $user->verify_payment = 0;
        $user->save();
        return redirect()->back();
    }
    public function tolakktm($id){
        $user = Team::where('id',$id)->first();
        $user->verify_ktm = 2;
        $user->save();
        return redirect()->back();
    }
    public function tolakletter($id){
        $user = Team::where('id',$id)->first();
        $user->verify_letter = 2;
        $user->save();
        return redirect()->back();
    }
    public function tolakpayment($id){
        $user = Team::where('id',$id)->first();
        $user->verify_payment = 2;
        $user->save();
        return redirect()->back();
    }
}
