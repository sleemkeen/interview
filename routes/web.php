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



Route::post('/postadduser', 'PageController@postadduser');
Route::get('/adduser', 'PageController@adduser');


Route::get('/addproduct', 'PageController@addproduct');
Route::post('/postaddproduct', 'PageController@postaddproduct');


Route::get('/addstore', 'PageController@addstore');
Route::post('/postaddstore', 'PageController@postaddstore');


Route::get('/readstore/{id}', 'PageController@readstore');

Route::get('/updatepage', 'PageController@updatepage');






Route::get('/getalluser', 'PageController@getalluser');



Route::post('/updateproduct', 'PageController@updateproduct');

Route::post('/updatestore', 'PageController@updatestore');


