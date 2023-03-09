<?php

use App\Http\Controllers\Dashboard\DashboardController;
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


Route::controller(DashboardController::class)->group(function () {
    Route::get('kebijakan', 'kebijakanView')->name('kebijakan.dashboard');
    Route::get('tata-kelola', 'tataKelolaView')->name('tata-kelola');
    Route::get('manajemen', 'managementView')->name('manajemen');
    Route::get('about', 'visiMisiView')->name('about');
    Route::get('/', 'homeView')->name('home');
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



Route::get('/uker', function () {
    return view('profil.unitKerja');
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



//admin
Route::get('/admin', function () {
    return view('admin.layout.index');
});

//kebijakanAdmin
Route::resource('/kebijakans', \App\Http\Controllers\KebijakanController::class);

//manajemenAdmin
Route::resource('/manajemens', \App\Http\Controllers\ManajemenController::class);

//layanan admin
Route::resource('/layanans', \App\Http\Controllers\LayananController::class);

//tatakelola admin
Route::resource('/tatakelolas', \App\Http\Controllers\TataKelolaController::class);

//Footer admin
Route::resource('/footers', \App\Http\Controllers\FooterController::class);

//VisiMisi
Route::get('/visimisis', [App\Http\Controllers\Admin\VisiMisiController::class, 'index'])->name('visimisis.index');
Route::get('/visimisis/edit', [App\Http\Controllers\Admin\VisiMisiController::class, 'editView'])->name('visimisis.edit');
Route::post('/visimisis/edit/store', [App\Http\Controllers\Admin\VisiMisiController::class, 'edit'])->name('visimisis.update');

//link Layanan
Route::get('/link-layanan', [App\Http\Controllers\Admin\LinkLayananController::class, 'index'])->name('link-layanan.index');
Route::get('/link-layanan/create', [App\Http\Controllers\Admin\LinkLayananController::class, 'create'])->name('link-layanan.create');
Route::post('/link-layanan/store', [App\Http\Controllers\Admin\LinkLayananController::class, 'store'])->name('link-layanan.store');

//login
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/navbarcontrol', function () {
    return view('admin.navbarcontrol.index');
});

Route::get('/manajemenadmin', function () {
    return view('admin.manajemen.index');
});
