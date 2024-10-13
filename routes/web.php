<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/admin/category', function() {
    return view('admin.category.index');
});
