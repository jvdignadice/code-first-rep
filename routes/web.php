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
// })->name('welcome');




// Route::get('/layout', function () {
//     return view('layout');
// });
//PUBLIC CLIENT ROUTE
Route::get('/home','App\Http\Controllers\StudentController@content')->name('home'); // contents
Route::get('/about','App\Http\Controllers\StudentController@index')->name('about'); // index
Route::get('/show','App\Http\Controllers\StudentController@layout')->name('show'); // layout

//CLIENT ROUTE
Route::get('/well','App\Http\Controllers\StudentController@welcome')->name('well'); // well
Route::get('/db','App\Http\Controllers\StudentController@database')->name('db'); // well
Route::get('/hide/{id}','App\Http\Controllers\StudentController@edit')->name('hide'); // edit
Route::get('/add','App\Http\Controllers\StudentController@addClient')->name('add'); // edit
Route::get('/delete/{id}','App\Http\Controllers\StudentController@deleteClient')->name('delete'); // delete
Route::put('/update/{id}','App\Http\Controllers\StudentController@putClient')->name('update'); // edit
Route::post('/client_reg','App\Http\Controllers\StudentController@create')->name('client_reg'); // well

//PUBLIC CUSTOMER ROUTE
Route::get('all','App\Http\Controllers\customerController@customerLayout')->name('all'); // layout
Route::get('ind', 'App\Http\Controllers\customerController@index')->name('ind'); // index
Route::get('views', 'App\Http\Controllers\customerController@view')->name('views'); // index



//CUSTOMER ROUTE
Route::get('addCustom', 'App\Http\Controllers\customerController@addCustomer')->name('addCustom'); // index
Route::get('/editCustomer/{id}','App\Http\Controllers\customerController@edited')->name('editCustomer'); // edit
Route::put('/updateCustomer/{id}','App\Http\Controllers\customerController@putCustomer')->name('updateCustomer'); // update
Route::get('/deleteCustom/{id}','App\Http\Controllers\customerController@deleteCustomer')->name('deleteCustom'); // update








