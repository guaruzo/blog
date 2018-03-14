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
Route::post('ventas', 'VentasController@store');
Route::get('ventas', 'VentasController@create');
Route::get('home', 'PagesController@home');

Route::get('contact', 'TicketsController@create');

Route::post('contact', 'TicketsController@store');

Route::get('tickets',  'TicketsController@index');
Route::get('ticket/{slug?}', 'TicketsController@show');
Route::get('ticket/{slug?}/edit', 'TicketsController@edit');

Route::post('ticket/{slug?}/edit', 'TicketsController@update');
Route::post('ticket/{slug?}/delete' , 'TicketsController@destroy');



Route::get('prueba', 'TicketsController@prueba');

Route::get('/', function () {
    return view('welcome');
});

