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
// About Page
Route::view('/about', 'about')->name('about');

// Blog Pages
Route::view('/blog/two-columns', 'blog.two-columns')->name('blog.two-columns');
Route::view('/blog/details-left-sidebar', 'blog.details-left-sidebar')->name('blog.details-left-sidebar');
Route::view('/blog/details-right-sidebar', 'blog.details-right-sidebar')->name('blog.details-right-sidebar');
Route::view('/blog/gallery-left-sidebar', 'blog.gallery-left-sidebar')->name('blog.gallery-left-sidebar');
Route::view('/blog/list-left-sidebar', 'blog.list-left-sidebar')->name('blog.list-left-sidebar');
Route::view('/blog/list-right-sidebar', 'blog.list-right-sidebar')->name('blog.list-right-sidebar');
Route::view('/blog/video-format', 'blog.video-format')->name('blog.video-format');

// Cart Page
Route::view('/cart', 'cart')->name('cart');

// Contact Page
Route::view('/contact', 'contact')->name('contact');

// FAQ Pages
Route::view('/faq', 'faq')->name('faq');
Route::view('/faq-2', 'faq-2')->name('faq-2');
Route::view('/faq-3', 'faq-3')->name('faq-3');
Route::view('/faq-4', 'faq-4')->name('faq-4');

// Login/Register Page
Route::view('/login-register', 'login-register')->name('login-register');

// Shop Pages
Route::view('/shop/two-columns', 'shop.two-columns')->name('shop.two-columns');
Route::view('/shop/full-width', 'shop.full-width')->name('shop.full-width');
Route::view('/shop/list-left-sidebar', 'shop.list-left-sidebar')->name('shop.list-left-sidebar');
Route::view('/shop/list-right-sidebar', 'shop.list-right-sidebar')->name('shop.list-right-sidebar');
Route::view('/shop/right-sidebar', 'shop.right-sidebar')->name('shop.right-sidebar');

// Shopping Cart Affiliate Page (assuming this is a variant)
Route::view('/shopping-cart-affiliate', 'shopping-cart-affiliate')->name('shopping-cart-affiliate');

// Single Product Pages
Route::view('/single-product/carousel', 'single-product.carousel')->name('single-product.carousel');
Route::view('/single-product/gallery-left', 'single-product.gallery-left')->name('single-product.gallery-left');
Route::view('/single-product/normal', 'single-product.normal')->name('single-product.normal');
Route::view('/single-product/sale-left', 'single-product.sale-left')->name('single-product.sale-left');
Route::view('/single-product/tab-style-left', 'single-product.tab-style-left')->name('single-product.tab-style-left');
Route::view('/single-product/tab-style-right', 'single-product.tab-style-right')->name('single-product.tab-style-right');

// Style CSS Sidebar (assuming this is a demo or style page)
Route::view('/style-css-sidebar', 'style-css-sidebar')->name('style-css-sidebar');

// Wishlist Page
Route::view('/wishlist', 'wishlist')->name('wishlist');


// Route::resource('')

require __DIR__.'/auth.php';
