<?php

use App\Http\Controllers\admin\AdminDashboardController;
use App\Http\Controllers\admin\AdminDirectorController;
use App\Http\Controllers\admin\AdminUserController;
use App\Http\Controllers\admin\AdminProductController;
use App\Http\Controllers\admin\AdminMovieController;
use App\Http\Controllers\admin\AdminOrderController;
use App\Http\Controllers\admin\AdminSettingController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front_pages\MovieController;
use App\Http\Controllers\front_pages\ProductController;
use App\Http\Controllers\front_pages\UserController;
use App\Http\Controllers\front_pages\HomeController;

 // FRONTEND
// MOVIE-ROUTES
Route::group(['prefix' => 'movies'], function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/{movie}', [MovieController::class, 'show'])->name('movies.show');
    Route::get('/edit/{movie}', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
});

// PRODUCTS-ROUTES
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
});

// ABOUT-ROUTES
Route::group(['prefix' => 'about'], function () {
    Route::get('/', [ProductController::class, 'index'])->name('about.index');
});

//HOME-ROUTES
Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/user/list', function() {
    return 'Hier werden früher oder später alle user angezeigt';
});
 
Route::get('/about', function() {
    return view('about.index');
});

Route::get('/register', function() {
    return view('user.index');
});

Route::get('/dashboard', function() {
    return view('admin.dashboard.index');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);




// Admin dashboard Routes
Route::prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    // Movies
    Route::prefix('movies')->name('movies.')->group(function () {
        Route::get('/', [AdminMovieController::class, 'index'])->name('index');
        Route::get('/create', [AdminMovieController::class, 'create'])->name('create');
        Route::post('/', [AdminMovieController::class, 'store'])->name('store');
        Route::get('/{movie}', [AdminMovieController::class, 'show'])->name('show');
        Route::get('/{movie}/edit', [AdminMovieController::class, 'edit'])->name('edit');
        Route::put('/{movie}', [AdminMovieController::class, 'update'])->name('update');
        Route::delete('/{movie}', [AdminMovieController::class, 'destroy'])->name('destroy');
    });

    // Directors
    Route::prefix('directors')->name('directors.')->group(function () {
        Route::get('/', [AdminDirectorController::class, 'index'])->name('index');
        Route::get('/create', [AdminDirectorController::class, 'create'])->name('create');
        Route::post('/', [AdminDirectorController::class, 'store'])->name('store');
        Route::get('/{director}', [AdminDirectorController::class, 'show'])->name('show');
        Route::get('/{director}/edit', [AdminDirectorController::class, 'edit'])->name('edit');
        Route::put('/{director}', [AdminDirectorController::class, 'update'])->name('update');
        Route::delete('/{director}', [AdminDirectorController::class, 'destroy'])->name('destroy');
    });

    // Users
    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', [AdminUserController::class, 'index'])->name('index');
        // Route::get('/create', [AdminUserController::class, 'create'])->name('create');
        // Route::post('/', [AdminUserController::class, 'store'])->name('store');
        // Route::get('/{user}', [AdminUserController::class, 'show'])->name('show');
        // Route::get('/{user}/edit', [AdminUserController::class, 'edit'])->name('edit');
        // Route::put('/{user}', [AdminUserController::class, 'update'])->name('update');
        // Route::delete('/{user}', [AdminUserController::class, 'destroy'])->name('destroy');
    });

    // Products
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [AdminProductController::class, 'index'])->name('index');
        // Route::get('/create', [AdminProductController::class, 'create'])->name('create');
        // Route::post('/', [AdminProductController::class, 'store'])->name('store');
        // Route::get('/{product}', [AdminProductController::class, 'show'])->name('show');
        // Route::get('/{product}/edit', [AdminProductController::class, 'edit'])->name('edit');
        // Route::put('/{product}', [AdminProductController::class, 'update'])->name('update');
        // Route::delete('/{product}', [AdminProductController::class, 'destroy'])->name('destroy');
    });

    // Orders
    Route::prefix('orders')->name('orders.')->group(function () {
        Route::get('/', [AdminOrderController::class, 'index'])->name('index');
        // Route::get('/create', [AdminOrderController::class, 'create'])->name('create');
        // Route::post('/', [AdminOrderController::class, 'store'])->name('store');
        // Route::get('/{order}', [AdminOrderController::class, 'show'])->name('show');
        // Route::get('/{order}/edit', [AdminOrderController::class, 'edit'])->name('edit');
        // Route::put('/{order}', [AdminOrderController::class, 'update'])->name('update');
        // Route::delete('/{order}', [AdminOrderController::class, 'destroy'])->name('destroy');
    });

    // Settings
    Route::prefix('settings')->name('settings.')->group(function () {
        Route::get('/', [AdminSettingController::class, 'index'])->name('index');
        // Route::get('/create', [AdminSettingController::class, 'create'])->name('create');
        // Route::post('/', [AdminSettingController::class, 'store'])->name('store');
        // Route::get('/{setting}', [AdminSettingController::class, 'show'])->name('show');
        // Route::get('/{setting}/edit', [AdminSettingController::class, 'edit'])->name('edit');
        // Route::put('/{setting}', [AdminSettingController::class, 'update'])->name('update');
        // Route::delete('/{setting}', [AdminSettingController::class, 'destroy'])->name('destroy');
    });

});




