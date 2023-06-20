<?php

use App\http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\MenuController;



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

// route bawaan
//Route::get('/', function () {
    //return view('welcome');
//});

Route::get('/', function () {
    return view('beranda', [
        "title" => "beranda",
        "active" => 'beranda',
    ]);
});


Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/info', [MenuController::class, 'info']);
Route::get('/mahasiswa', [MenuController::class, 'Mahasiswa']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('siswa', SiswaController::class);
