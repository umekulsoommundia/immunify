<?php

use Illuminate\Support\Facades\Route;

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
Route::get('profile', function () {
    return view('profile.index');
});
Route::get('pages-profile', function () {
    return view('profile.pages-profile');
});
Route::get('pages-sign-in', function () {
    return view('profile.pages-sign-in');
});
Route::get('pages-sign-up', function () {    
    return view('pages-sign-up');
});
