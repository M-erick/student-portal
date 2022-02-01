<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdfGenerator() {

        $data =[
            'title' =>'Welcome to Coding ',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('pdf' , $data);
        return $pdf ->download('transcript.pdf');
    }


}
