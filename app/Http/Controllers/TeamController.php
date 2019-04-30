<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Http\Request;
use App\Team;
use Auth;
class TeamController extends Controller
{
    public function __construct(){
    	// $this->middleware('auth'); //matiin kalo lagi testing mode
	} 
	
	public function start(){

		return view('index', compact('users'));
	
	}

    public function appsToday(){
        return view('apps');
    }

    public function hackToday(){
        return view('hack');
    }

    public function businessIT(){
        return view('business');
    }

    public function daming()
    {
        return view('daming');
    }

    public function seminarIT(){
        return view('seminar');
    }
    
    public function workshop(){
        return view('workshop');
    }

    public function postEvent(){
        return view('postevent');
    }
    public function showForm(){
    
        $users = Auth::user()->id;
	    return view('reg_stp1', compact('users')); 

    }

    public function payment(){
        $user_id = Auth::user()->id;
        $data = Team::where('team_id',$user_id)->first();
        return view('payment',compact('data'));

    }
    public function adminhome(){
        return view('adminhome');
    }

    public function admindetail(){
        return view('admindetail');
    }
    public function addTeam(Request $request){
        $this->validate($request,[
            'member_one'=>'required',
            'school'=>'required',
            'province'=>'required',
            'phone_num'=>'required',
            'tipe' =>'required'
        ]);
        
        $id = $request->input('id');
        $team = new Team;
        //cek kalo member 2 ama 3 ada atau tidak
        $team->team_id = $id;
        $team->member_one = $request->input('member_one');
        $team->member_two = $request->input('member_two');
        $team->member_three = $request->input('member_three');
        $team->school = $request->input('school');
        $team->province = $request->input('province');
        $team->phone_num = $request->input('phone_num');
        $team->type = $request->input('type');
        //not required, maybe null
        $team->line_id = $request->input('line_id');
        $team->type = $request->input('tipe');
        $team->save();
        return redirect()->route('team.profile');
    }

    
}
