<?php

use App\Http\Controllers\DatakuController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('index');
});
Route::get('/data', function () {
    return view('index');
});
Route::get('/base', 'DataController@index');
Route::get('/data', 'DatakuController@index');
Route::get('/data/create', 'DatakuController@create');
Route::get('/data/{student}', 'DatakuController@show');
Route::post('/data', 'DatakuController@store');
Route::delete('/data/{student}', 'DatakuController@destroy');
Route::get('/data/{student}/edit', 'DatakuController@edit');
Route::patch('/data/{student}', 'DatakuController@update');
