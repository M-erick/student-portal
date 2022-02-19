<?php

namespace App\Http\Controllers;

use App\Models\MSUUnits;
use Illuminate\Http\Request;

class MSUUnitController extends Controller
{
    public function index() {
        $data = MSUUnits::all();

        // return view('layouts.semRegistration',$data);
    }
    //
}
