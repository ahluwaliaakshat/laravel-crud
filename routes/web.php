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

Route::get('/','CrudController@index')->name('index');
Route::post('/insert_student','CrudController@insert')->name('insert');
Route::get('/fetch_student/{id}','CrudController@fetch')->name('fetch');
Route::post('/update_student/{id}','CrudController@update')->name('update');
Route::get('/delete_student/{id}','CrudController@delete')->name('delete');

