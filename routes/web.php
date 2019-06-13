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

Route::get('/', function () {return view('index');});
Route::get('/nosotros', function () {return view('nosotros');});
Route::get('/postventa', function () {return view('postventa');});
Route::get('/proyecto/{project}', 'ProjectController@enVenta');
Route::get('admin', function () {return view('admin.index');});
Route::get('/blog','BlogController@index');

Route::get('realizados/{project}','ProjectController@realizados');
Route::get('avance/{project}','ProjectController@avance');

// Admin

Route::get('crear-blog','BlogController@create');

Route::post('crear-blog','BlogController@store');
Route::post('email-proyect','ProjectController@email');
Route::post('postventa','ProjectController@postventa');
