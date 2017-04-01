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
    //return view('welcome');
    return view('prueba');
});

Route::get('/administrar', function () {
    //return view('welcome');
    return view('Prenda.index');
});

  route::resource('Prenda','Prenda\PrendaController',['only' => ['store','update']]);
route::get('/Prenda/create',['as' => 'Prenda.create', 'uses' => 'Prenda\PrendaController@create']);
