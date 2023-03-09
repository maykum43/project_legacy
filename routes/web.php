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
    return view('index_gudang');
});

//Main
Route::get('/index', 'MainController@index')->name('home');
//Invoice
Route::get('/inv', 'InvoiceController@index')->name('inv');
Route::get('/inv.create', 'InvoiceController@create')->name('inv.create');

//Brg
Route::get('/brg','StokController@index')->name('brg');

//Coll
Route::get('/cols','ControllerWarna@index')->name('cols_dt');
Route::get('/create_col','ControllerWarna@create')->name('col.create');
Route::post('/save_col','ControllerWarna@store')->name('col.save');
