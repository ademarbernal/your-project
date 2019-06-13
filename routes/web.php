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
Route::get('/home', 'HomeController@index')->name('home');
//endLogin

Route::middleware(['auth', 'admin'])->group(function () {
Route::resource('/employee', 'EmployeeController');
Route::resource('/tipos', 'TipoController');
});
Route::resource('/client', 'ClientController');
//Promociones


//Promociones
Route::resource('/promociones', 'PromocionController');