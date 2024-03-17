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
        "title" => "contact"
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