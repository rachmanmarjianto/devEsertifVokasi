<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/admin-acara', function () {
//     return view('admin.acara');
// })->middleware('auth');

// Route::get('/mahasiswa-acara', function () {
//     return view('mahasiswa.acara')->middleware('auth');
// });

Route::get('/admin-acara', function () {
    return view('admin.acara');
});
