<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
	
	Route::get('password/reset', function(){
	    return view('auth.passwords.reset');
	})->name('password/reset');
	Route::post('/password/verify_old_pass', 'HomeController@verify_old_password');

	Route::get('logout', 'Auth\LoginController@logout')->name('logout');
	Route::post('/change-pass', 'HomeController@changepass');

	Route::get('/admin-acara', 'Admin\AcaraController@index')->name('admin-acara');
	Route::get('/admin/buat-acara', 'Admin\AcaraController@buat_acara');
	Route::get('/admin/edit-acara/{id}', 'Admin\AcaraController@edit_acara');
	Route::get('/admin/detail-acara/{id}', 'Admin\AcaraController@detail_acara');
	Route::post('/admin/req-data-jenis-kegiatan', 'Admin\AcaraController@req_data_jenis_kegiatan');
	Route::post('/admin/buat-acara', 'Admin\AcaraController@store_acara');
	Route::post('/admin/edit-acara', 'Admin\AcaraController@store_edit_acara');
	Route::post('/update/{id}', 'Admin\AcaraController@update_peserta');
	Route::post('/admin/upload-sertif', 'Admin\AcaraController@storeSertif');
	Route::post('/admin/upload-partisipan', 'Admin\AcaraController@storePartisipan');
	Route::get('/admin/cetak-sertifikat/{id_acara}', 'Mahasiswa\SertifikatController@testCetakSertif');
	Route::get('/cari-mahasiswa', 'Admin\CariMahasiswaController@index');
	Route::post('/cari-mahasiswa/find-data', 'Admin\CariMahasiswaController@find_data');
	

	Route::get('/mahasiswa-acara', 'Mahasiswa\AcaraController@index')->name('mahasiswa-acara');
	Route::get('/mahasiswa/cetak-sertifikat/{id_acara}', 'Mahasiswa\SertifikatController@cetakSertif');
	// Route::post('/mahasiswa/update-nama', 'Mahasiswa\AcaraController@update_nama_mahasiswa');

	Route::get('/admin/download/template/{id}',function($id){
		$file = App\Models\TemplateSertifikat::find($id);
		return Storage::disk('public')->download($file->FILE_TEMPLATE);
	});
});

//route untuk nyoba encrypt
Route::get('/get-encrypt/{nim};{id_acara}', 'Mahasiswa\SertifikatController@getEncrypted');

//route untuk cek sertif
Route::get('/validasi-sertifikat/{encrypted}', 'Mahasiswa\SertifikatController@getDecrypted');

// route untuk download file excel template daftar partisipan
Route::get('/getexcel/{filename}', 'Admin\AcaraController@getExcel');