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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/testmodel',function(){
	$q=App\Blog::all();
	return $q;
});

Route::get('/testproduk',function(){
	$q=App\Produk::all();
	return $q;
});

Route::get('/testpengguna',function(){
	$q=App\Pengguna::all();
	return $q;
});

Route::get('/testpengaturan',function(){
	$q=App\Pengaturan::all();
	return $q;
});