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

Route::get('demo',[UserController::class,'demo']);

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('profile.edit');
    Volt::route('settings/password', 'settings.password')->name('password.edit');
    Volt::route('settings/appearance', 'settings.appearance')->name('appearance.edit');
});

Route::view('/404', 'website.404')->name('404');
Route::view('/about', 'website.about')->name('about');
Route::view('/blog-details', 'website.blog-details')->name('blog-details');
Route::view('/blog', 'website.blog')->name('blog');
Route::view('/checkout', 'website.checkout')->name('checkout');
Route::view('/compare', 'website.compare')->name('compare');
Route::view('/contact', 'website.contact')->name('contact');
Route::view('/faq', 'website.faq')->name('faq');
Route::view('/index', 'website.index')->name('index');
Route::view('/login-register', 'website.login-register')->name('login-register');
Route::view('/product-details', 'website.product-details')->name('product-details');
Route::view('/shop-list', 'website.shop-list')->name('shop-list');
Route::view('/shopping-cart', 'website.shopping-cart')->name('shopping-cart');
Route::view('/wishlist', 'website.wishlist')->name('wishlist');

require __DIR__.'/auth.php';
