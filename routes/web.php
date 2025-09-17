<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
    // Route::resource('order', OrderController::class);
    // Route::resource('product', ProductController::class);
    // Route::post('productbuy/{product}', [ProductController::class, 'productbuy'])->name('productbuy');
    // Route::get('cardview', [OrderController::class, 'cardview'])->name('cardview');
    // Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
    // Route::resource('role', RoleController::class);
    // Route::resource('permission', PermissionController::class);
    // Route::resource('user', UserController::class);
    // Route::post('addPermissionToRole/{role}', [RoleController::class, 'addPermissionToRole'])->name('addPermissionToRole');
    // Route::post('assignPermissionsToUser/{user}', [PermissionController::class, 'assignPermissionsToUser'])->name('assignPermissionsToUser');
    // Route::post('assignRolesToUser/{user}', [RoleController::class, 'assignRolesToUser'])->name('assignRolesToUser');
});

// Route::resource('')

require __DIR__.'/auth.php';
