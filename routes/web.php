<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas', function () {
    $ninjas = [
        ["id" => "1", "name" => "Hattori Hanzo", "age" => 35, "specialty" => "Stealth"],
        ["id" => "2", "name" => "Fuma Kotaro", "age" => 30, "specialty" => "Espionage"],
        ["id" => "3", "name" => "Kato Danzo", "age" => 40, "specialty" => "Assassination"],
        ["id" => "4", "name" => "Momochi Sandayu", "age" => 28, "specialty" => "Martial Arts"],
        ["id" => "5", "name" => "Ishikawa Goemon", "age" => 33, "specialty" => "Thievery"],
    ];
    return view('ninjas.index', ['greeting' => 'Hello', 'ninjas' => $ninjas]);
});

Route::get('/ninjas/{id}', function ($id) {
    return view('ninjas.show', ['id' => $id]);
});