<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/quem-somos', function () {
    return view('QuemSomos');
});

Route::get('/fale-conosco', function () {
    return view('FaleConosco');
});

Route::get('/nossos-servicos', function () {
    return view('NossosServicos');
});

Route::get('/login', function () {
    return view('Login');
});

Route::get('/posts', function () {
    return view('Posts');
});

Route::get('/posts/post', function () {
    return view('Post');
});