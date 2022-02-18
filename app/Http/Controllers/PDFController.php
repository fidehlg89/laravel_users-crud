<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('export.tag', $data);
     
        return $pdf->download('pdf-tag.pdf');
    }
   
}
