<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemon', function () {
    return view('pokemon.index', ["greeting" => "hello"]);
});
