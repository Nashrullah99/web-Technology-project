<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PresultController extends Controller
{
    public function presult($id){
        $user= DB::table('admissionresults')
        ->where('fk_id',$id)
        ->get();
        $user=$user[0];
        return view('personalresult',[
            'user' => $user,
        ]);
    }   
}
