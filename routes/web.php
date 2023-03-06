<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/administrasi', function () {
    return view('layanan.administrasi');
});

Route::get('/public', function () {
    return view('layanan.public');
});

Route::get('/peraturan', function () {
    return view('profil.peraturan');
});

Route::get('/detailProgres', function () {
    return view('detailProgres.DProgres');
});

Route::get('/detailProgres2', function () {
    return view('detailProgres.DProgres2');
});

Route::get('/manajemen', function () {
    return view('layout.manajemen');
});

//admin
Route::get('/admin', function () {
    return view('admin.master');
});

Route::get('/dashboard', function () {
    return view('admin.layout.index');
});


//kebijakanAdmin
Route::resource('/kebijakans', \App\Http\Controllers\KebijakanController::class);

//layanan admin
Route::resource('/layanans', \App\Http\Controllers\LayananController::class);

//tatakelola admin
Route::resource('/tatakelolas', \App\Http\Controllers\TataKelolaController::class);

//Footer admin
Route::resource('/footers', \App\Http\Controllers\FooterController::class);

//login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/navbarcontrol', function () {
    return view('admin.navbarcontrol.index');
});

Route::get('/manajemenadmin', function () {
    return view('admin.manajemen.index');
});
