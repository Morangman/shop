<?php

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

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/info', function () {
    return view('pages/info');
});

Route::get('/obmen_i_vozvrat', function () {
    return view('pages/obmen_i_vozvrat');
});

Route::get('/oplata_i_dostavka', function () {
    return view('pages/oplata_i_dostavka');
});

Route::get('/product', function () {
    return view('pages/product');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
