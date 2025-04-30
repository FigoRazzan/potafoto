<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/fotonow', function () {
    return view('fotonow');
});