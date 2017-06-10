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

//Belajar Model
//Route::get('/testmodel',function(){
	//$q=App\Blog::all();
	//return $q;
//});

//Route::get('/testproduk',function(){
	//$q=App\Produk::all();
	//return $q;
//});

//Route::get('/testpengguna',function(){
	//$q=App\Pengguna::all();
	//return $q;
//});

//Route::get('/testpengaturan',function(){
	//$q=App\Pengaturan::all();
	//return $q;
//});

//controller digunakan sebagai pengatur alur program
//Latihan Controller
//Route::get('test','PrakerinController@percobaan');
//Route::get('test2','PrakerinController@percobaan2');
//Route::get('test3','PrakerinController@percobaan3');
//Route::get('test4','PrakerinController@percobaan4');
//Route::get('test5','PrakerinController@percobaan5');

//Parameter
//Route::get('halaman/{id}','PrakerinController@param');
//Route::get('/{a}','PrakerinController@parameter');

//Memanggil Data dari Database Menggunakan Controller
//Route::get('test1','CobaController@test');
//Route::get('/{id}','CobaController@test2');
//Route::get('test6/{id}','CobaController@test3');
//Route::get('test7','CobaController@ulang');
//Route::get('test/{a}','CobaController@array');
//Route::get('test8/{id}','CobaController@test4');
Route::resource('post','PostController');