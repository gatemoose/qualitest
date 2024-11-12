<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/sobre', function () {
    return view('Sobre');
});

Route::get('/contato', function () {
    return view('Contato');
});

Route::get('/servicos', function () {
    return view('Servicos');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/posts', function () {
    return view('Posts');
});

Route::get('/posts/1', function () {
    return view('Post');
});