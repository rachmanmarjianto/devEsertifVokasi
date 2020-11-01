<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout')->middleware('auth')->name('logout');

Route::get('/admin-acara', 'Admin\AcaraController@index')->middleware('auth')->name('admin-acara');
Route::get('/admin/buat-acara', 'Admin\AcaraController@buat_acara')->middleware('auth');
Route::get('/admin/detail-acara', 'Admin\AcaraController@detail_acara')->middleware('auth');

Route::get('/mahasiswa-acara', function () {
    return view('mahasiswa.acara');
})->middleware('auth')->name('mahasiswa-acara');
