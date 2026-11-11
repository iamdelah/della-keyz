<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cybersecurity', function () {
    return view('cybersecurity.index');
})->name('cybersecurity.index');
