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
    return view('welcome');
});

Auth::routes();

Route::get('/administration', 'HomeController@index')->name('/administration');

/*
| -----------------------------------------------------------------
| Route CRUD (Create, Read, Update, Delete)
| - buat database
| - buat template -> insert form
| - buat model
| - buat controller
| -----------------------------------------------------------------
*/

/*
| -----------------------------------------------------------------
| Route kursus
| - membuat route index
| - membuat route tambah (create)
| - membuat route edit
| - membuat route update
| - membuat route delete (dengan metode <a> tag)
| - membuat route untuk pemnyimpanan ke database dari inputan tambah (create)
| -----------------------------------------------------------------
*/

Route::get('/kursus', 'kursusController@index');

/*route untuk pengambilan select box dan menampilkan value di ajax*/
Route::get('/kursus/{kursus_id}', 'kursusController@selectAjax');

Route::get('/kursus/tambah', 'kursusController@tambah');
Route::get('/kursus/{kursus}/edit', 'kursusController@edit');
Route::patch('/kursus/{kursus}', 'kursusController@update');
Route::get('/kursus/{kursus}/delete', ['as' => 'kursus.delete', 'uses' => 'kursusController@delete']);
Route::post('/kursus', 'kursusController@store');


/*
| -----------------------------------------------------------------
| Route Ruangan
| -----------------------------------------------------------------
*/

Route::get('/ruangan', 'ruanganController@index');
Route::get('/ruangan/tambah', 'ruanganController@tambah');
Route::get('/ruangan/{ruangan}/edit', 'ruanganController@edit');
Route::patch('/ruangan/{ruangan}', 'ruanganController@update');
Route::get('/ruangan/{ruangan}/delete', ['as' => 'ruangan.delete', 'uses' => 'ruanganController@delete']);
Route::post('/ruangan', 'ruanganController@store');
