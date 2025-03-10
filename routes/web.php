<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
// Route::get('/register', [AuthController::class, 'showRegister']);
// Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');
Route::get('/admin/add-blog', function () {
    return view('admin.add-blog');
})->middleware('auth')->name('add-blog');
Route::get('/admin/page-banner', function () {
    return view('admin.page-banner');
})->middleware('auth')->name('page-banner');

Route::get('/admin/product', function () {
    return view('admin.product');
})->middleware('auth')->name('product');
Route::get('/admin/leading-blog', function () {
    return view('admin.leading-blog');
})->middleware('auth')->name('leading-blog');
Route::get('/admin/about-images', function () {
    return view('admin.page-banner');
})->middleware('auth')->name('page-banner');
Route::get('/admin/page-banner', function () {
    return view('admin.page-banner');
})->middleware('auth')->name('page-banner');