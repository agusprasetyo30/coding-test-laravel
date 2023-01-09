<?php

// use Illuminate\Support\Facades\Auth;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;
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
            
Auth::routes();

Route::get('datatables/mahasiswa', 'MahasiswaController@datatables');

Route::resource('mahasiswa', 'MahasiswaController', [
    'expect'  => ['destroy'],
    'middleware' => 'auth'
]);

Route::get('mahasiswa/{mahasiswa}/delete', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

Route::get('/home', 'HomeController@index')->name('home');
