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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('login', function () {
    return view('auth.login', [
        'title' => 'Masuk'
    ]);
});
Route::get('register', function () {
    return view('auth.register', [
        'title' => 'Daftar'
    ]);
});
Route::get('help', function () {
    return view('auth.help', [
        'title' => 'help'
    ]);
});
Route::get('dashboard', function () {
    return view('dashboard', [
        'title' => 'dashboard'
    ]);
});
