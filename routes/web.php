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

    Route::post('logout', [Controllers\Auth\LoginController::class, 'logout'])->name('logout');

    Route::resource('categories', Controllers\CategoriesController::class)->except(['create']);

});

