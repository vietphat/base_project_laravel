<?php

use App\Http\Controllers\AppUserController;
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
    // Account
    Route::prefix('account')->middleware('auth')->group(function () {
        Route::get('/list', function () {
            return view('admin.account.list');
        })->name("admin.account.list");
        Route::get('/add', function () {
            return view('admin.account.add');
        })->name("admin.account.add");
    });
    // User
    Route::prefix('user')->middleware('auth')->group(function () {
        // User - Info
        Route::get('/info', [AppUserController::class, 'info'])->name("admin.user.info");
        // User - List
        Route::get('/list', [AppUserController::class, 'index'])->name("admin.user.list");
        // User - Add
        Route::get('/add', [AppUserController::class, 'create'])->name("admin.user.add");
        // POST: User - Store
        Route::post("/store", [AppUserController::class, 'store'])->name("admin.user.store");
        // User - Edit
        Route::get("/edit/{id?}", [AppUserController::class, 'edit'])->name("admin.user.edit");
        // POST: User - Update
        Route::post("/update/{id?}", [AppUserController::class, 'update'])->name("admin.user.update");
        // User - Show
        Route::get("/show/{id?}", [AppUserController::class, 'show'])->name("admin.user.show");
        // User - Delete
        Route::get("/destroy/{id?}", [AppUserController::class, 'destroy'])->name("admin.user.destroy");
        // User - Change Password
        Route::get("/change-password", [AppUserController::class, 'changePassword'])->name("admin.user.change_password");
        // POST: User - Change Password
        Route::post("/change-password", [AppUserController::class, 'storeChangePassword'])->name("admin.user.store_change_password");
    });
});
