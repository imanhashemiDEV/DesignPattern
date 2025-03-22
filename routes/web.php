<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

Route::resource('/users', \App\Http\Controllers\Admin\UserController::class);

Route::get('/register_user', [\App\Http\Controllers\Admin\AuthController::class,'register'])->name('user.register');

require __DIR__.'/auth.php';


Route::get('/create_order', [\App\Http\Controllers\Front\OrderController::class,'createOrder'])->name('order.create');


Route::get('/shipping', [\App\Http\Controllers\Front\ShippingController::class,'shipping'])->name('shipping.create');
