<?php

use App\Http\Controllers\AuthControler;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("dashboard")->middleware('auth');

// Admin
Route::prefix('admin')->group(function () {
    // Admin - Login
    Route::get('/', [AuthControler::class, 'get_login_page'])->name('admin.get_login_page');
    Route::post('/', [AuthControler::class, 'login'])->name('admin.login');

    // Admin - Register
    Route::get('/register', [AuthControler::class, 'get_register_page'])->name('admin.get_register_page');
    Route::post('/register', [AuthControler::class, 'register'])->name('admin.register');

    // Admin - Logout
    Route::get('/logout', [AuthControler::class, 'logout'])->name('admin.logout');

    // Admin - Dashboard
    Route::get('/dashboard', [AuthControler::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

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
