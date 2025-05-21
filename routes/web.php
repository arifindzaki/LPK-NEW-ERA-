<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\petugasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumniController;
use App\Http\Controllers\galeryController;
use App\Http\Controllers\mahasiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\masuk;
use App\Http\Controllers\pelatihanController;
use PhpParser\Node\Name;

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
//home
Route::get('/',[ DashboardController::class,'home'] );
//about
Route::get('/alumni',[ DashboardController::class,'alumni'] );
// alumni
Route::get('/about',[ DashboardController::class,'about'] );

// Route::get('/contact', function () {
//     return view('contact',[
//         "title" => "contact",
//         "email" => "lpk@gmail.com",
//         "nomor" => "08233942166"
//     ]);
// });

// kontak
Route::get('/contact', [DashboardController::class,'contact']);

// galeri
Route::get('/galeri', [DashboardController::class,'galeri']);

// pelatihan
Route::get('/pelatihan', [DashboardController::class,'pelatihan']);

Route::get('/belajar', [DashboardController::class,'belajar']);



// Route::get('/admin/index', function () {
//     return view('admin/index',[
//     "title" => "index"]);
// });
// Route::get('/admin/halaman/index', function () {
//     return view('admin/index',[
//     "title" => "index"]);
// });

Route::get('admin/halaman/beranda', [AdminController::class,'beranda']);

Route::get('admin/halaman/pelatihan', [AdminController::class,'pelatihan'])->name('pelatihan.view');

Route::get('admin/halaman/alumni', [AdminController::class,'alumni'])->name('alumni.view');

Route::get('admin/halaman/galery', [AdminController::class,'galery'])->name('galery.view');

Route::get('admin/halaman/admin', [AdminController::class,'admin'])->name('admin.view');

Route::get('admin/halaman/contact', [AdminController::class,'contact'])->name('contact.view');

Route::get('admin/halaman/mahasiswa', [AdminController::class,'mahasiswa'])->name('mahasiswa.view');

// tambah data semua
Route::get('admin/halaman/tambahalumni', [alumniController::class,'create'])->name('alumni.tambah');
Route::get('admin/halaman/tambahadmin', [petugasController::class,'create'])->name('admin.tambah');
Route::get('admin/halaman/tambahpelatihan', [pelatihanController::class,'create'])->name('pelatihan.tambah');
Route::get('admin/halaman/tambahgalery', [galeryController::class,'create'])->name('galery.tambah');
Route::get('admin/halaman/tambahcontact', [contactController::class,'create'])->name('contact.tambah');
Route::get('admin/halaman/tambahmahasiswa', [mahasiswaController::class,'create'])->name('mahasiswa.tambah');

// alumni crud
Route::post('admin/halaman/tambahalumni', [alumniController::class,'store'])->name('alumni.store');
Route::post('admin/halaman/editalumni/{id}', [alumniController::class,'update'])->name('alumni.update');
Route::get('admin/halaman/editalumni/{id}', [alumniController::class,'edit'])->name('alumni.edit');
Route::get('admin/halaman/alumni/{id}', [alumniController::class,'hapus'])->name('alumni.hapus');

// pelatihan crud
Route::post('admin/halaman/tambahpelatihan', [pelatihanController::class,'store'])->name('pelatihan.store');
Route::post('admin/halaman/editpelatihan/{id}', [pelatihanController::class,'update'])->name('pelatihan.update');
Route::get('admin/halaman/editpelatihan/{id}', [pelatihanController::class,'edit'])->name('pelatihan.edit');
Route::get('admin/halaman/pelatihan/{id}', [pelatihanController::class,'hapus'])->name('pelatihan.hapus');

// galery crud
Route::post('admin/halaman/tambahgalery', [galeryController::class,'store'])->name('galery.store');
Route::post('admin/halaman/editgalery/{id}', [galeryController::class,'update'])->name('galery.update');
Route::get('admin/halaman/editgalery/{id}', [galeryController::class,'edit'])->name('galery.edit');
Route::get('admin/halaman/galery/{id}', [galeryController::class,'hapus'])->name('galery.hapus');

// admin crud
Route::post('admin/halaman/tambahadmin', [petugasController::class,'store'])->name('admin.store');
Route::post('admin/halaman/editadmin/{id}', [petugasController::class,'update'])->name('admin.update');
Route::get('admin/halaman/editadmin/{id}', [petugasController::class,'edit'])->name('admin.edit');
Route::get('admin/halaman/admin/{id}', [petugasController::class,'hapus'])->name('admin.hapus');

// contact crud
Route::post('admin/halaman/tambahcontact', [contactController::class,'store'])->name('contact.store');
Route::post('admin/halaman/editcontact/{id}', [contactController::class,'update'])->name('contact.update');
Route::get('admin/halaman/editcontact/{id}', [contactController::class,'edit'])->name('contact.edit');
Route::get('admin/halaman/contact/{id}', [contactController::class,'hapus'])->name('contact.hapus');

// mahasiswa crud
Route::post('admin/halaman/tambahmahasiswa', [mahasiswaController::class,'store'])->name('mahasiswa.store');
Route::post('admin/halaman/editmahasiswa/{id}', [mahasiswaController::class,'update'])->name('mahasiswa.update');
Route::get('admin/halaman/editmahasiswa/{id}', [mahasiswaController::class,'edit'])->name('mahasiswa.update');
Route::get('admin/halaman/mahasiswa/{id}', [mahasiswaController::class,'hapus'])->name('mahasiswa.update');

// login admin

Route::get('admin/login', [LoginController::class,'login']);
Route::post('admin/login', [LoginController::class,'authenticating'])->name('login.authenticating');

// coba masuk
// Route::get('admin/masuk', [masuk::class,'login']);
// Route::post('admin/masuk', [masuk::class,'authenticating'])->name('login.authenticating');