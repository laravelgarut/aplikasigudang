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
Route::get('/satuan', 'MasterController@index_satuan');
Route::get('/satuan/tambah', 'MasterController@form_tambah_satuan');
Route::post('/satuan/simpan', 'MasterController@simpan_satuan');
//Buat Routing http://localhost:8000/satuan/update/{id} berupa GET
//dengan parameter id 
Route::get('/satuan/update/{id}', 'MasterController@update_satuan');
//Buat Routing /satuan/simpan_update berupa POST
//Fungsi nya menggunakan nama simpan_update_satuan
//URL /satuan/simpan_update akan di eksekusi ke controller simpan_update_satuan
//
Route::post('/satuan/simpan_update', 'MasterController@simpan_update_satuan');

/* 
    Buat Routing http://localhost:8000/satuan/hapus/{id} berupa GET 
    dengan parameter id, hampir mirip sama update
*/

Route::get('/satuan/hapus/{id}', 'MasterController@hapus_satuan');
