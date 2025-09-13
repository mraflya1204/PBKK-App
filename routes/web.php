<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["id" => "1", "name" => "Hattori Hanzo", "age" => 35, "specialty" => "Stealth", "skill" => 70],
        ["id" => "2", "name" => "Fuma Kotaro", "age" => 30, "specialty" => "Espionage", "skill" => 75],
        ["id" => "3", "name" => "Kato Danzo", "age" => 40, "specialty" => "Assassination", "skill" => 65],
        ["id" => "4", "name" => "Momochi Sandayu", "age" => 28, "specialty" => "Martial Arts", "skill" => 50],
        ["id" => "5", "name" => "Ishikawa Goemon", "age" => 33, "specialty" => "Thievery", "skill" => 80],
    ];
    return view('ninjas.index', ['greeting' => 'Hello', 'ninjas' => $ninjas]);
});

Route::get('/ninjas/create', function () {
    return view('ninjas.create');
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
});