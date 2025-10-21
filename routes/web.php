<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manajemen-risk', function () {
    return view('manajemenRisk');
});

Route::get('/penerapan-k3', function () {
    return view('penerapank3');
});

Route::get('/landasan-hukum', function () {
    return view('LandasanHukum');
});


