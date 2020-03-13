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

Route::get('/group/index', 'GroupController@index')->name('group-index');

Route::get('/samples/sample-001', 'HomeController@sample001')->name('sample-001');
Route::get('/samples/sample-002', 'HomeController@sample002')->name('sample-002');
