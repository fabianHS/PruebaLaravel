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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/fecha',function(){
  $dia = date('d');
  $mes = date('m');
  $anio = date('Y');
  return view('fecha',['dia'=>$dia,'mes'=>$mes,'anio'=>$anio]);
});

Route::get('/prueba',function (){
  return view('prueba');
});

 // Router

Route::get('/','HomeController@getHome')->middleware('language');

Route::get('auth/login',function()
{
  return view('auth/login');
});

Route::get('catalog/','CatalogController@getIndex');

Route::get('catalog/show/{id}','CatalogController@getShow');

Route::get('catalog/create','CatalogController@getCreate');

Route::get('catalog/edit/{id}','CatalogController@getEdit');

// Route 404

Route::get('/imagen',function(){
  return view('images');
});

// Ejercicio 2
/*Route::get('prueba/home','PruebaController@index');

Route::get('prueba/create','PruebaController@create');

Route::get('prueba/store/{id}','PruebaController@edit');

Route::get('prueba/show/{id}','PruebaController@show');

Route::get('prueba/edit/{id}','PruebaController@edit');

Route::get('prueba/update/{id}','PruebaController@update');

Route::get('prueba/destroy/{id}','PruebaController@detroy');*/

Route::resource ('/prueba', 'PruebaController');

Route::get('/request','Request2Controller@index');
