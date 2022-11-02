<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\contactus;
use App\Models\resultfile;
use App\Models\noticefile;

class IndexController extends Controller
{
    public function index($user){
        $candidate= DB::table('profile')
        ->where('fk_id',$user)
        ->get();
        $user= \App\Models\User::find($user);
        return view('profile',[
            'user' => $user,
            'candidate' => $candidate,
        ]);
    }

    public function result(){
        $resultfiles = resultfile::all();
        return view('result',[
            'resultfiles' => $resultfiles,
        ]);
    }
    public function helpdesk(){
        return view('helpdesk');
    }
    public function faq(){
        return view('faq');
    }
    public function notices(){
        $noticefiles = noticefile::all();
        return view('notices',[
            'noticefiles' => $noticefiles,
        ]);
    }
    public function subchoice(){
        return view('subchoice');
    }
    public function allocatedsub(){
        return view('allocatedsub');
    }
    public function paymentmethod(){
        return view('paymentmethod');
    }
    public function contactus(Request $req){
        $contactus = new contactus;
        $contactus->username = $req->input('username');
        $contactus->phonenumber = $req->input('phonenumber');
        $contactus->email = $req->input('email');
        $contactus->problemtype = $req->input('problemtype');
        $contactus->problemdetails = $req->input('problemdetails');
        $contactus->save();
        return redirect()->back()->with('status','Message sent successfully');
    }
}
