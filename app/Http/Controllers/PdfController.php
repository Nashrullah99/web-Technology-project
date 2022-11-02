<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class PdfController extends Controller
{
    public function generatePDF()
    {
        $users = DB::table('admissionresults')->orderby('total_marks','desc')->get();
  
        $data = [
            'title' => 'Undergraduate Admission Test result 2023-2024',
            'date' => date('m/d/Y'),
            'users' => $users
        ]; 
        return view('pdfresult', $data);
    }
}
