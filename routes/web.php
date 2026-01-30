<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('admin.dashboard.index');
});

Route::get('/pegawai', function () {
    return view('admin.pegawai.index');
});

Route::get('/pegawai/non-aktif', function () {
    return view('admin.pegawai.non-aktif');
});

Route::get('izin-cuti', function () {
    return view('admin.izin-cuti.index');
});
