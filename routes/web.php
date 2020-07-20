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
Route::get('/rooms', 'RoomController@index')->middleware('auth');
Route::get('/room/{id}', 'RoomController@room')->middleware('auth');
Route::get('/chat/get_chat/{room_id}', 'ChatController@getChat')->middleware('auth');
Route::post('/chat/post_chat/{room_id}', 'ChatController@postChat')->middleware('auth');
Route::post('/rooms/new', 'RoomController@new')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
