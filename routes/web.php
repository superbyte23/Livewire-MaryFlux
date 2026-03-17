<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::livewire('/mary', 'pages::maryUI')->name('maryUI');
Route::livewire('/daisy', 'pages::daisyUI')->name('daisyUI');

require __DIR__.'/settings.php';
