<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\admin;
use App\Models\contactus;
use App\Models\resultfile;
use App\Models\noticefile;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('adminlogin');
    }

    function registration()
    {
        return view('adminregistration');
    }

    function validate_registration(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'email'        =>   'required|email|unique:users',
            'password'     =>   'required|min:6'
        ]);

        $data = $request->all();

        admin::create([
            'name'  =>  $data['name'],
            'email' =>  $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        return redirect('adminlogin')->with('success', 'Registration Completed, now you can login');
    }

    function validate_login(Request $request)
    {
        $request->validate([
            'email' =>  'required',
            'password'  =>  'required'
        ]);
        $aCheckUser = admin::SELECT("email","password") ->where("email", $request->email)->first();

        if( ! empty($aCheckUser))
		{
			$semail = $aCheckUser->email;
			$hashedPassword = $aCheckUser->password;

			if (Hash::check($request->password, $hashedPassword))
            return redirect('dashboard');
			else
                return redirect('adminlogin')->with('success', 'Login details are not valid');
			
		}else
		{
			return redirect('adminlogin')->with('success', 'Login details are not valid');
		}

    }

    function dashboard()
    {   
        $messages = Contactus::all();
         
        return view('dashboard',
        ['messages'=> $messages,
        ]);   
    }

    function logout()
    {
        Session::flush();

        Auth::logout();

        return Redirect('adminlogin');
    }
    public function addresult(Request $req){
        $resultfile = new resultfile;
        $resultfile->description = $req->input('description');
        if($req->hasfile('resultfile'))
        {
            $file = $req->file('resultfile');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('files/resultfiles/', $filename);
            $resultfile->resultfiles = $filename;
        }        
        $resultfile->save();
        redirect()->back()->with('status','Result successfully updated');
    }
    public function addnotice(Request $req){
        $noticefile = new noticefile;
        $noticefile->description = $req->input('description');
        if($req->hasfile('noticefile'))
        {
            $file = $req->file('noticefile');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('files/noticefiles/', $filename);
            $noticefile->noticefiles = $filename;
        }        
        $noticefile->save();
        redirect('dashboard')->with('status','Notice successfully added');
    }
}
