<?php

use App\Http\Controllers\DomPdfController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

/* homepage routes */
Route::get('/', [HomepageController::class, 'index'])->name('homepage.index');

/* shop routes */
Route::resource('shop', ShopController::class)->only(['index', 'show']);

/* contact routes */
Route::get('/contact', function () {
    return view('contact');
})->name('contact.index');

/* pdf routes */
Route::get('/get-pdf', [DomPdfController::class, 'getPdf'])->name('pdf.index');

/* dashboard routes */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* - user routes - */
Route::resource('/dashboard/users', UserController::class)->middleware(['auth', 'verified']);

/* - product routes - */
Route::resource('/dashboard/products', ProductController::class)->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';