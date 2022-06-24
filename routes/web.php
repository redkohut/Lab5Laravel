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

Route::get('/', 'App\Http\Controllers\MainController@main');

Route::get('/team', 'App\Http\Controllers\MainController@team');


Route::get('/main', 'App\Http\Controllers\MainController@main');


Route::get('/games', 'App\Http\Controllers\MainController@games');


Route::get('/collaboration', 'App\Http\Controllers\MainController@collaboration');

Route::get('/collaboration', 'App\Http\Controllers\MainController@review')->name('collaboration');
Route::post('/collaboration/check', 'App\Http\Controllers\MainController@review_check');
