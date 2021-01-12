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
Route::get('/index', 'AnggotaUmkmController@index');
Route::get('/create', 'AnggotaUmkmController@create');
Route::post('/store', 'AnggotaUmkmController@store');
Route::get('/anggotas/edit/{id}', 'AnggotaUmkmController@edit');
Route::patch('/anggotas/update/{id}', 'AnggotaUmkmController@update');
Route::delete('anggotas/{id}', 'AnggotaUmkmController@delete');
