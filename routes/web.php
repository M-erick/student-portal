<?php

use Barryvdh\DomPDF\FACADE\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\RegisterYearController;
use App\Http\Controllers\RegisteredUnitController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/registration', '\App\Http\Controllers\UnitController');
Route::resource('/Yearregistration','\App\Http\Controllers\RegisterYearController');



Route::get('/Provisional-results', function () {
     $pdf = PDF::loadView('transcript');
    return $pdf->download('Transcript.pdf');
})->name('pdf');
// use this route as a button



