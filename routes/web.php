<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/compras', function () {
    return view('compras');
});
Route::get('/cadastro', function() {
    return view('cadastro');
});
