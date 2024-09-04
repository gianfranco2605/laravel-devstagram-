<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('principal');
});

Route::get('/tienda', function () {
    return view('tienda');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
