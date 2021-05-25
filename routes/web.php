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

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

use App\Http\Controllers\OrderController;
Route::post('/order/submit', [OrderController::class, 'order'])->name('order-form');





