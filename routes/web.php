<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ContactUsController;
use Illuminate\Support\Facades\Route;

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
    return view('Home0239');
});
Route::get('/home',[HomeController::class, 'home']);
Route::get('/artikel',[ArtikelController::class, 'artikel']);
Route::get('/contact',[ContactUsController::class, 'contactus']);