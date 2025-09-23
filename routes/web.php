<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;

Route::get('/', action: [NinjaController::class, 'home'])->name('ninjas.home');
Route::get('/about', action: [NinjaController::class, 'about'])->name('ninjas.about');
Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::get('/ninjas/{id}', [NinjaController::class,'show'])->name('ninjas.show');