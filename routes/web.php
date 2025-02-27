<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", function () {
    return view('blog');
});

Route::get('/api/about', function () {
    return view('about');
})->name('about');

Route::get('/api/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/api/admin', function () {
    return view('admin');
})->name('admin');
