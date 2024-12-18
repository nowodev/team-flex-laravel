<?php

use App\Livewire\Friends;
use App\Livewire\Members;
use App\Livewire\Messages;
use App\Models\Message;
use App\Models\User;
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
        $members = User::count();
        $receivedMessages = Message::whereNot('user_id', auth()->id())->count();
        $sentMessages = Message::where('user_id', auth()->id())->count();
        return view('dashboard', compact('members', 'receivedMessages', 'sentMessages'));
    })->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('members', Members::class)->name('members');
    Route::get('friends', action: Friends::class)->name('friends');
    Route::get('messages', Messages::class)->name('messages');
});
