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
});

Route::view('/index-1', 'website.index')->name('index-1');
Route::view('/index-2', 'website.index-2')->name('index-2');
Route::view('/index-3', 'website.index-3')->name('index-3');
Route::view('/index-4', 'website.index-4')->name('index-4');

Route::view('/about', 'website.about-us')->name('about');

Route::view('/blog/two-columns', 'website.blog.two-columns')->name('blog.two-columns');
Route::view('/blog/details-left-sidebar', 'website.blog.details-left-sidebar')->name('blog.details-left-sidebar');
Route::view('/blog/details-right-sidebar', 'website.blog.details-right-sidebar')->name('blog.details-right-sidebar');
Route::view('/blog/gallery-left-sidebar', 'website.blog.gallery-left-sidebar')->name('blog.gallery-left-sidebar');
Route::view('/blog/list-left-sidebar', 'website.blog.list-left-sidebar')->name('blog.list-left-sidebar');
Route::view('/blog/list-right-sidebar', 'website.blog.list-right-sidebar')->name('blog.list-right-sidebar');
Route::view('/blog/video-format', 'website.blog.video-format')->name('blog.video-format');

// Cart Page
Route::view('/cart', 'website.cart')->name('cart');

// Contact Page
Route::view('/contact', 'website.contact')->name('contact');

// FAQ Pages
Route::view('/faq', 'website.faq')->name('faq');
Route::view('/faq-2', 'website.faq-2')->name('faq-2');
Route::view('/faq-3', 'website.faq-3')->name('faq-3');
Route::view('/faq-4', 'website.faq-4')->name('faq-4');

// Login/Register Page
Route::view('/login-register', 'website.login-register')->name('login-register');

// Shop Pages
Route::view('/shop/two-columns', 'website.shop.two-columns')->name('shop.two-columns');
Route::view('/shop/full-width', 'website.shop.full-width')->name('shop.full-width');
Route::view('/shop/list-left-sidebar', 'website.shop.list-left-sidebar')->name('shop.list-left-sidebar');
Route::view('/shop/list-right-sidebar', 'website.shop.list-right-sidebar')->name('shop.list-right-sidebar');
Route::view('/shop/right-sidebar', 'website.shop.right-sidebar')->name('shop.right-sidebar');

// Shopping Cart Affiliate Page
Route::view('/shopping-cart-affiliate', 'website.shopping-cart-affiliate')->name('shopping-cart-affiliate');

// Single Product Pages
Route::view('/single-product/carousel', 'website.single-product.carousel')->name('single-product.carousel');
Route::view('/single-product/gallery-left', 'website.single-product.gallery-left')->name('single-product.gallery-left');
Route::view('/single-product/normal', 'website.single-product.normal')->name('single-product.normal');
Route::view('/single-product/sale-left', 'website.single-product.sale-left')->name('single-product.sale-left');
Route::view('/single-product/tab-style-left', 'website.single-product.tab-style-left')->name('single-product.tab-style-left');
Route::view('/single-product/tab-style-right', 'website.single-product.tab-style-right')->name('single-product.tab-style-right');

// Style CSS Sidebar
Route::view('/style-css-sidebar', 'website.style-css-sidebar')->name('style-css-sidebar');

// Wishlist Page
Route::view('/wishlist', 'website.wishlist')->name('wishlist');


// Route::resource('')

require __DIR__.'/auth.php';
