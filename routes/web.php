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

Route::get('/','PersonneController@get_table');

Route::get('detail','PersonneController@return_detail');

Route::Post('/add', 'PersonneController@add_people');

Route::get('/edit/{id}','PersonneController@edit_form');


Route::Post('/editCheck/{id}','PersonneController@check_edit');

Route::get('/delete/{id}','PersonneController@delete');