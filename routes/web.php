<?php

use App\Http\Controllers\MessageController;
use App\Livewire\Friends;
use App\Livewire\Members;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('members', Members::class)->name('members');
    Route::get('friends', action: Friends::class)->name('friends');
    Route::resource('messages', MessageController::class);
});
