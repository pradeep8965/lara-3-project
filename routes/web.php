<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Another', function () {
    return view('Another');
});
Route::get('/details', function () {
    return view('detail');
});
