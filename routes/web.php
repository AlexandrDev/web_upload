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
Route::get('/', 'FilesController@index');

Route::post('/', 'FilesController@upload');

Route::post('/login', 'FilesController@login');
Route::get('/logout', 'FilesController@logout');

Route::get('files', 'FilesController@list');
Route::get('files/remove/{name}', 'FilesController@remove');
