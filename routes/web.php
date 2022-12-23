<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("dashboard");

Route::prefix('admin')->group(function () {

    Route::get('/widgets', function () {
        return view('widgets');
    })->name("admin.widgets");

    Route::prefix('account')->group(function () {
        Route::get('/list', function () {
            return view('admin.account.list');
        })->name("admin.account.list");
        Route::get('/add', function () {
            return view('admin.account.add');
        })->name("admin.account.add");
    });

    Route::prefix('user')->group(function () {
        Route::get('/list', function () {
            return view('admin.user.list');
        })->name("admin.user.list");
        Route::get('/add', function () {
            return view('admin.user.add');
        })->name("admin.user.add");
    });
});
