<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Permission\PermissionController;
use App\Http\Controllers\Api\Role\RoleController;
use App\Http\Controllers\Api\User\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::resource('user',(UserController::class));
    Route::resource('role',(RoleController::class));
    Route::resource('permission',(PermissionController::class));
    Route::post('assignPermission/{role}',[RoleController::class,'addPermissionToRole']);
    Route::post('assignRoleToUser/{user}',[RoleController::class,'assignRolesToUser']);
    Route::post('assignPermissionsToUser/{user}',[PermissionController::class,'assignPermissionsToUser']);
});