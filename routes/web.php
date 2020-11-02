<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
	
	Route::get('password/reset', function(){
	    return view('auth.passwords.reset');
	})->name('password/reset');

	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
	Route::post('/change-pass', 'HomeController@changepass');

	Route::get('/admin-acara', 'Admin\AcaraController@index')->name('admin-acara');
	Route::get('/admin/buat-acara', 'Admin\AcaraController@buat_acara');
	Route::get('/admin/detail-acara/{id}', 'Admin\AcaraController@detail_acara');
	Route::post('/admin/req-data-jenis-kegiatan', 'Admin\AcaraController@req_data_jenis_kegiatan');
	Route::post('/admin/buat-acara', 'Admin\AcaraController@store_acara');

	Route::get('/mahasiswa-acara', function () {
	    return view('mahasiswa.acara');
	})->name('mahasiswa-acara');

	Route::post('/update/{id}', 'Admin\AcaraController@update_peserta');

});