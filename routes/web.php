<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/',
    [TourController::class, 'mainPage']
)->name('main');

Route::get(
    '/tours',
    [TourController::class, 'tourPage']
)->name('tours');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/request/{id}', [RequestController::class, 'create'])->name('req');
Route::resource('request', RequestController::class);


// 1- execute composer install

// 2- rename .env.example to .env and updated it with your database credentials

// 3- php artisan key:generate

// 4- php artisan serve
require __DIR__ . '/auth.php';
