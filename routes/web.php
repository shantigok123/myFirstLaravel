<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JakeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [JakeController::class, 'index']);


Route::get('/', 'JakeController@index')->name('login')->middleware('guest');
Route::get('/logout', 'JakeController@logout');
Route::get('/home', 'JakeController@home')->middleware('auth');
Route::post('/process', 'JakeController@process');
Route::get('/register', 'JakeController@register')->middleware('guest');
Route::post('/addUser', 'JakeController@addUser');



