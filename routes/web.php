<?php

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
    return view('home',[
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "about"
    ]);
});

Route::get('/alumni', function () {
    return view('alumni',[
        "title" => "alumni"
    ]);
});

Route::get('/contact', function () {
    return view('contact',[
        "title" => "contact",
        "email" => "lpk@gmail.com",
        "nomor" => "08233942166"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri',[
        "title" => "galeri"
    ]);
});

Route::get('/pelatihan', function () {
    return view('pelatihan',[
        "title" => "pelatihan"
    ]);
});
Route::get('/isipelatihan', function () {
    return view('isipelatihan',[
        "title" => "isipelatihan"
    ]);
});
Route::get('/admin/index', function () {
    return view('admin/index',[
    "title" => "index"]);
});
Route::get('/admin/index', function () {
    return view('admin/index',[
    "title" => "index"]);
});
Route::get('/admin/halaman/pelatihan', function () {
    return view('admin/halaman/pelatihan',[
    "title" => "pelatihan"]);
});
Route::get('/admin/halaman/alumni', function () {
    return view('admin/halaman/alumni',[
    "title" => "pelatihan"]);
});
Route::get('/admin/halaman/tambahalumni', function () {
    return view('admin/halaman/tambahalumni',[
    "title" => "pelatihan"]);
});
Route::get('/admin/halaman/galery', function () {
    return view('admin/halaman/galery',[
    "title" => "galery"]);
});
Route::get('/admin/halaman/admin', function () {
    return view('admin/halaman/admin',[
    "title" => "admin"]);
});
Route::get('/admin/login', function () {
    return view('admin/login',[
    "title" => "login"]);
});