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
<<<<<<< HEAD

Route::get('layout', function () {
    return view('profile.layout');
});
Route::get('u', function () {
    return view('profile.u');
});
Route::get('dashboard', function () {
    return view('profile.dashboard');
});
Route::get('overview', function () {
    return view('admin.overview');
});
Route::get('profile', function () {
    return view('admin.profile');
=======
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
>>>>>>> bafbbbb5afeee689b6839155b142579d3cf9b7d5
});
