<?php

use App\Http\Controllers\Admin\Admincontroller;
use App\Http\Controllers\Auth\AdminLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminLoginController::class, 'auth'])->name('admin.auth');

});

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [Admincontroller::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [Admincontroller::class, 'logout'])->name('admin.logout');
    Route::get('/admin/guru', [Admincontroller::class, 'guru'])->name('admin.guru');
});

