<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'Auth\LoginController@login');
Route::get('/chat/get_chat', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/post_chat', 'ChatController@postChat')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
