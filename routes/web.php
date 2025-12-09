<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\DokumentasiController;

Route::get('/undangan/{id}/dokumentasi/create', [DokumentasiController::class, 'create'])->name('dokumentasi.create');
Route::post('/undangan/{id}/dokumentasi', [DokumentasiController::class, 'store'])->name('dokumentasi.store');
Route::get('/dokumentasi/download/{id}', [DokumentasiController::class, 'download'])->name('dokumentasi.download');


// Routes untuk PdfController (Undangan PDF)
Route::get('/undangan/send', [PdfController::class, 'sendInvitation'])->name('undangan.send');
Route::get('/undangan/list', [PdfController::class, 'index'])->name('undangan.list');
Route::get('/undangan/download/{id}', [PdfController::class, 'download'])->name('undangan.download');

// Routes statis / halaman lain
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

Route::get('/sop', function () {
    return view('sop');
});

Route::get('/struktur-organisasi', function () {
    return view('strukturOrganisasi');
});

Route::get('/k3-document-management', function () {
    return view('k3_document_management'); 
});
