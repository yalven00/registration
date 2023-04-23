<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('registration', RegisterController::class);
Route::get('registration', 'RegisterController@index')->name('registration');
Route::post('registed', 'RegisterController@store')->name('registed');
Route::post('login', 'RegisterController@clogin')->name('login');
Route::post('dashboard', 'RegisterController@dashboard')->name('dashboard');
Route::get('logout', 'SessionController@destroy')->name('logout');
