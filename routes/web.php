<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes([
    'register' => false,
    'verify' => false,
    'reset' => false
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('', [App\Http\Controllers\Admin\IndexController::class, 'index'])->name('dashboard');

    // route profile
    Route::prefix('profile')->group(function () {
        Route::prefix('struktur')->group(function () {
            Route::get('', [App\Http\Controllers\Admin\Profile\StrukturController::class, 'index'])->name('admin.struktur.index');
            Route::get('create', [App\Http\Controllers\Admin\Profile\StrukturController::class, 'create'])->name('admin.struktur.create');
            Route::post('create', [App\Http\Controllers\Admin\Profile\StrukturController::class, 'store'])->name('admin.struktur.store');
            Route::get('edit/{id}', [App\Http\Controllers\Admin\Profile\StrukturController::class, 'edit'])->name('admin.struktur.edit');
            Route::patch('edit/{id}', [App\Http\Controllers\Admin\Profile\StrukturController::class, 'update'])->name('admin.struktur.update');
            Route::delete('edit/{id}', [App\Http\Controllers\Admin\Profile\StrukturController::class, 'destroy'])->name('admin.struktur.destroy');
        });

        Route::get('', [App\Http\Controllers\Admin\Profile\SejarahController::class, 'index'])->name('admin.sejarah.index');
        Route::post('', [App\Http\Controllers\Admin\Profile\SejarahController::class, 'store'])->name('admin.sejarah.store');
    });

    // route tanah
    Route::prefix('tanah')->group(function () {
        Route::get('', [App\Http\Controllers\Admin\TanahController::class, 'index'])->name('admin.tanah.index');
        Route::get('edit/{id}', [App\Http\Controllers\Admin\TanahController::class, 'edit'])->name('admin.tanah.edit');
        Route::patch('edit/{id}', [App\Http\Controllers\Admin\TanahController::class, 'update'])->name('admin.tanah.update');
        Route::delete('edit/{id}', [App\Http\Controllers\Admin\TanahController::class, 'destroy'])->name('admin.tanah.destroy');
        Route::get('create', [App\Http\Controllers\Admin\TanahController::class, 'create'])->name('admin.tanah.create');
        Route::post('create', [App\Http\Controllers\Admin\TanahController::class, 'store'])->name('admin.tanah.store');
    });
});
