<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main');
})->name('main');

Route::get('/menu', function () {
    return view('menu');
})->name('menu');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/contacts/submit', function () {
    return view('reviews');
})->name('reviews');

Route::post('/reviews', function () {
    return view('reviews');
})->name('order-form');





