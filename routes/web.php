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

Route::get('/hola', function () {
    return 'Hola Mundo';
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function(){
    return view('admin');
});
Route::get('/book', function(){
    return view('book');
});
Route::get('/home', function(){
    return view('home');
});
Route::get('/index', function(){
    return view('index');
});
Route::get('/loan', function(){
    return view('loan');
});









