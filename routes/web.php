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


Route::get('index', 'IndexController@Index');

Route::get('index/{id}', 'IndexController@Show');

Route::get('create', 'IndexController@Create');

Route::post('/create', 'IndexController@Store');

Route::get('index/{id}/edit', 'IndexController@Edit');

Route::post('index/{id}/edit', 'IndexController@Update');

Route::get('index/{id}/delete', 'IndexController@Destroy');