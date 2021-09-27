<?php

// Sertifikat tidak ditemukan
Route::any('/certificate-not-found', function () {
    return view('errors.certificate-not-found');
});

// Custom 404
Route::any('{catchall}', function () {
    return view('errors.404');
})->where('catchall', '.*');