<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/partai', function () {
    return view('partai');
});

Route::get('/tentangpemilu', function () {
    return view('tentangpemilu');
});

Route::get('/tentangkami', function () {
    return view('tentangkami');
});

Route::get('/warnakartu', function () {
    return view('warnakartu');
});
