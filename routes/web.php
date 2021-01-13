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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::prefix('anggotas')->group(function(){
    Route::get('index', 'AnggotaUmkmController@index');

    Route::get('create', 'AnggotaUmkmController@create');
    Route::post('store', 'AnggotaUmkmController@store');

    Route::get('edit/{id}', 'AnggotaUmkmController@edit');
    Route::patch('update/{id}', 'AnggotaUmkmController@update');

    Route::delete('{id}', 'AnggotaUmkmController@delete');
});

Route::prefix('kategoris')->group(function(){
    Route::get('index', 'KategoriUmkmController@index');

    Route::get('create', 'KategoriUmkmController@create');
    Route::post('store', 'KategoriUmkmController@store');

    Route::get('edit/{id}', 'KategoriUmkmController@edit');
    Route::patch('update/{id}', 'KategoriUmkmController@update');

    Route::delete('{id}', 'KategoriUmkmController@delete');
});

