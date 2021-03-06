<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/', [Controllers\PagesController::class, 'root'])->name('root');

Route::middleware('guest')->group(function () {

    Route::get('login', [Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [Controllers\Auth\LoginController::class, 'login']);

});

Route::middleware('auth')->group(function () {

    Route::get('dashboard', [Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::get('profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::post('logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::get('settings/display', [Controllers\SettingsController::class, 'display'])->name('settings.display');
    Route::put('settings/display', [Controllers\SettingsController::class, 'updateAll'])->name('settings.updateAll');
    Route::resource('settings', Controllers\SettingsController::class)->except(['show']);

    Route::resource('categories', Controllers\CategoriesController::class)->except(['create']);

    Route::resource('posts', Controllers\PostsController::class);

    Route::resource('pages', Controllers\PagesController::class);

    Route::prefix('filepond')->group(function () {
        Route::post('process', [Controllers\FilepondUploadsController::class, 'process'])->name('filepond.process');
        Route::get('load', [Controllers\FilepondUploadsController::class, 'load'])->name('filepond.load');
        Route::delete('revert', [Controllers\FilepondUploadsController::class, 'revert'])->name('filepond.revert');
    });

});

