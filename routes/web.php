<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\UsersTable;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/users', UsersTable::class)
    ->name('users');
