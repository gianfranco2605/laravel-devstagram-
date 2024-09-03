<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('app');
// });

Route::get('/', function () {
    return view('tienda');
});

Route::get('/nosotros', function () {
    return view('nosotros');
});
