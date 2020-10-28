<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user-login');
});

Route::get('/auth', function () {
    return view('admin.acara');
});
