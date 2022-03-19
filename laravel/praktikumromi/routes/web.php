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

Route::get('/belajar-laravel', function () {
    return "Ini sudah pake framework laravel";
});

//Routing dasar

Route::get('/tes-method-route', function () {
    return view('welcome');
});

Route::get('/get', function () {
    return view('Tes route dengan method HTTP get');
});

Route::post('/post', function () {
    return view('Tes route dengan method HTTP post');
});

Route::put('/put', function () {
    return view('Tes route dengan method HTTP put');
});

Route::delete('/delete', function () {
    return view('Tes route dengan method HTTP post');
});

Route::get('/page/{page_number}', function ($page_number) {
    return "<h1>Halaman ".$page_number."</h1>"."Laravel Emang Keren";
});

Route::get('/parameter/{parameter1?}', function ($parameter1="Gita") {
    return "Parameter Nama adalah : ".$parameter1;
});


Route::group(['prefix' => 'tes'], function () {
    //route dasar method get
    
    Route::get('/get}', function() {
        return "Tes method Route GET";
    });
    
});

// Tabel Product
Route::resource('product', 'ProductController');
Route::get('product/delete/{id}','ProductController@delete');
Route::post('product/update','ProductController@update');

// Untuk tabel Karyawan
Route::resource('karyawan', 'KaryawanController');
Route::get('karyawan/delete/{id}','KaryawanController@delete');
Route::post('karyawan/update','KaryawanController@update');

// Tabel Kategori
Route::resource('kategori', 'KategoriController');
Route::get('kategori/delete/{id}','KategoriController@delete');
Route::post('kategori/update','KategoriController@update');

Route::get('/',function(){
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
