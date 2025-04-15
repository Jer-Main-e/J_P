<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pokemon', function () {
    $pokemon = [
        [
            "name" => "Pikachu",
            "type" => "Electric",
            "level" => 25,
            "image" => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/4.png",
            "id" => 1
        ],
        [
            "name" => "Bulbasaur",
            "type" => "Grass",
            "level" => 5,
            "image" => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/1.png",
            "id" => 2
        ],
        [
            "name" => "Charmander",
            "type" => "Fire",
            "level" => 10,
            "image" => "https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/2.png",
            "id" => 3
        ]
    ];

    return view('pokemon.index', ["greeting" => "hello", "pokemon" => $pokemon]);
});

Route::get('/pokemon/{id}', function ($id) {
    return view('pokemon.show', ["id" => $id]);
});