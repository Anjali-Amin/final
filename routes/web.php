<?php

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

Route::get('/upload', function () {
    return view('upload');
});

Route::get('/viewwish', function () {
    return view('viewwish');
});

Route::get('/submitwish', function () {
    return view('submitwish');
});

Route::resource('/statewish','StatewishController');

// Route::get('/viewwish', 'ViewWish@index');

// Route::get('/viewwish/action', 'ViewWish@action')->name('viewwish.action');