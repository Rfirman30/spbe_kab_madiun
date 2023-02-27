<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.index');
});

Route::get('/kebijakan', function () {
    return view('layout.kebijakan');
});

Route::get('/about', function () {
    return view('profil.visi');
});

Route::get('/berita', function () {
    return view('layout.berita');
});

Route::get('/layanan', function () {
    return view('layanan.layanan');
});

Route::get('/tugas', function () {
    return view('profil.tugasFungsi');
});

Route::get('/detail', function () {
    return view('detail.Dberita1');
});

Route::get('/tata', function () {
    return view('layout.tatakelola');
});

Route::get('/uker', function () {
    return view('profil.unitKerja');
});

Route::get('/internal', function () {
    return view('layanan.internal');
});

Route::get('/eksternal', function () {
    return view('layanan.eksternal');
});

Route::get('/peraturan', function () {
    return view('profil.peraturan');
});

//admin
Route::get('/admin', function () {
    return view('admin.master');
});

Route::get('/home', function () {
    return view('admin.modul.home.index');
});

//kebijakanAdmin
Route::resource('/kebijakans', \App\Http\Controllers\KebijakanController::class);

Route::get('/kebiadmin', function () {
    return view('admin.kebijakan_admin.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
