<?php

use App\Http\Controllers\JeuxController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [JeuxController::class, 'index'])->name('Jeux');
Route::view('/Jeux/creer', 'Creer');
Route::post('/Jeux/creer', [JeuxController::class, 'create'])->name('creer');
Route::get('/Jeux/{id}', [JeuxController::class, 'details']);
Route::delete('/Jeux/{id}', [JeuxController::class, 'delete']);
Route::get('/Jeux/{id}/modify', [JeuxController::class, 'show'])->name('modif');
Route::patch('/Jeux/{id}/modify', [JeuxController::class, 'modify'])->name('patch');
Route::view('/login', 'login');
Route::view('/register', 'register');
Route::post('/login', [UserController::class, 'signIn']);
Route::post('/register', [UserController::class, 'SignUp']);
Route::get('/logout', [UserController::class, 'logOut']);
Route::get('/dashboard', [UserController::class, 'index']);