<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/contacts', function () {
    return view('contacts');
});

Route::get('/reviews', function () {
    return view('reviews');
});



