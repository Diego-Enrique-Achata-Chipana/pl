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
Route::get('empleados','EmpleadoController@index');
<<<<<<< HEAD
Route::post('empleadoss','EmpleadoController@store');
Route::put('empleadoss','EmpleadoController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Route::post('empleados','EmpleadoController@store');
Route::patch('empleados','EmpleadoController@update');
>>>>>>> 08fa3ba2f2ab21a9f0f3eec98c13a82769f174f1
