<?php

use App\Http\Controllers\AppAdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("dashboard")->middleware('auth');

// Admin
Route::prefix('admin')->group(function () {
    // Admin - Login
    Route::get('/',[AppAdminController::class, 'login'])->name('admin.login');
    Route::post('/',[AppAdminController::class, 'store_login'])->name('admin.store_login');

    // Admin - Register
    Route::get('/register',[AppAdminController::class, 'register'])->name('admin.register');
    Route::post('/register',[AppAdminController::class, 'store_register'])->name('admin.store_register');

    // Admin - Logout
    Route::get('/logout',[AppAdminController::class, 'logout'])->name('admin.logout');
    
    // Admin - Dashboard
    Route::get('/dashboard',[AppAdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
    
    Route::get('/widgets', function () {
        return view('widgets');
    })->name("admin.widgets")->middleware('auth');

    Route::prefix('account')->middleware('auth')->group(function () {
        Route::get('/list', function () {
            return view('admin.account.list');
        })->name("admin.account.list");
        Route::get('/add', function () {
            return view('admin.account.add');
        })->name("admin.account.add");
    });

    Route::prefix('user')->middleware('auth')->group(function () {
        Route::get('/list', function () {
            return view('admin.user.list');
        })->name("admin.user.list");
        Route::get('/add', function () {
            return view('admin.user.add');
        })->name("admin.user.add");
    });
});
