<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/', 'HomeController@show');
// Route::get('/register', 'AuthController@form');
// Route::post('/welcome', 'AuthController@welcome');

// Route::get('/master', function () {
//     return view('adminlte/master');
// });
// Route::get('/items', function () {
//     return view('items.index');
// });
// Route::get('/items/create', function () {
//     return view('items.create');
// });
// Route::get('/data-tables', function () {
//     return view('items.datatables');
// });


// Route::get('/tambahItem', 'ItemController@create');
// Route::post('/items', 'ItemController@store');

// Route::get('/pertanyaan', function () {
//     return view('pertanyaan.index');
// });
Route::get('/pertanyaan', 'PertanyaanController@index');
Route::get('/pertanyaan/create', 'PertanyaanController@create');
Route::post('/pertanyaan', 'PertanyaanController@store');

Route::get('/jawaban', 'JawabanController@index');
Route::get('/jawaban/{pertanyaan_id}', 'JawabanController@show');
Route::post('/jawaban/{pertanyaan_id}', 'JawabanController@tambah');
