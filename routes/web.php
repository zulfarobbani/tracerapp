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
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/login', function(){
    return view('login');
})->name('login');
Route::get('/coba', function () {
    return view('coba');
});

//crud Alumni
Route::get('alumni', 'AlumniController@index')->name('alumni.index');
Route::get('alumni/tambahdata', 'AlumniController@tambah' )->name('alumni.tambah');
Route::post('alumni/store', 'AlumniController@store');
Route::get('alumni/edit/{id}', 'AlumniController@edit')->name('alumni.edit');
Route::post('alumni/update', 'AlumniController@update');
Route::delete('alumni/delete/{id}', 'AlumniController@delete')->name('alumni.delete');

