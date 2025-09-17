<?php

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

// Route::get('/user', function (Request $request) {
    Route::middleware(['auth'])->group(function () {
        Route::resource('order', OrderController::class);
        Route::resource('product', ProductController::class);
        Route::post('productbuy/{product}', [ProductController::class, 'productbuy'])->name('productbuy');
        Route::get('cardview', [OrderController::class, 'cardview'])->name('cardview');
        Route::post('/payment/process', [PaymentController::class, 'process'])->name('payment.process');
        Route::resource('role', RoleController::class);
        Route::resource('permission', PermissionController::class);
        Route::resource('user', UserController::class);
        Route::post('addPermissionToRole/{role}', [RoleController::class, 'addPermissionToRole'])->name('addPermissionToRole');
        Route::post('assignPermissionsToUser/{user}', [PermissionController::class, 'assignPermissionsToUser'])->name('assignPermissionsToUser');
        Route::post('assignRolesToUser/{user}', [RoleController::class, 'assignRolesToUser'])->name('assignRolesToUser');
    });
// })->middleware('auth:sanctum');
