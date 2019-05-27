<?php

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
    return view('pages.dashboard');
});
Route::get('/profil', function () {
    return view('pages.profil');
});
Route::get('/anak', function () {
    return view('pages.anak');
});
Route::get('/berita', function () {
    return view('pages.berita');
});
Route::get('/berita1', function () {
    return view('pages.berita1');
});
Route::get('/kontak', function () {
    return view('pages.kontak');
});
Route::get('/donasi', function () {
    return view('pages.donasi');
});
Route::get('/inventaris', function () {
    return view('pages.inven');
});
Route::get('/pengajuan', function () {
    return view('pages.pengaju');
});

Route::get('/admin/manage', function () {
    return view('admin.manage');
});

Route::get('/admin/anak', function () {
    return view('admin.anak');
});

Route::get('/admin/berita', function () {
    return view('admin.berita');
});

Route::get('/admin/donasi', function () {
    return view('admin.donasi');
});

Route::get('/admin/berkas', function () {
    return view('admin.berkas');
});

Route::get('/admin/unggah', function () {
    return view('admin.unggah');
});

