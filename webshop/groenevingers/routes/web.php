<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomPdfController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\EnsureRoleIsValid;
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
Route::get("/", [HomepageController::class, "index"])->name("homepage.index");

/* shop routes */
Route::resource("/shop", ShopController::class)->only(["index", "show"]);

/* order routes */
Route::resource("/order", OrderController::class);
Route::patch("/order", [OrderController::class, 'setCustomerInformation'])->name('order.setCustomerInformation');

/* checkout routes */
Route::get("/checkout", [CheckoutController::class, 'index'])->name('checkout.index');

/* contact routes */
Route::get("/contact", function () {
    return view("contact");
})->name("contact.index");

/* pdf routes */
Route::get("/get-pdf", [DomPdfController::class, "getPdf"])->name("pdf.index");

/* dashboard routes */
Route::get("/dashboard", [DashboardController::class, "index"])->middleware(["auth", "verified"])->name("dashboard");

/* routes only accessible to authenticated users */
Route::middleware("auth")->group(function () {
    /* - profile routes - */
    Route::get("/profile", [ProfileController::class, "edit"])->name("profile.edit");
    Route::patch("/profile", [ProfileController::class, "update"])->name("profile.update");
    Route::delete("/profile", [ProfileController::class, "destroy"])->name("profile.destroy");

    /* - user routes - */
    Route::get("/dashboard/users", [UserController::class, "index"])->name("users.index");

    /* - product routes - */
    Route::get("/dashboard/products", [ProductController::class, "index"])->name("products.index");
});

/* routes only accessible to Administrators, Accountants and Managers */
Route::middleware("auth", "verified", "role:Admin,Accountant,Manager")->group(function () {
    /* - user routes - */
    Route::resource("/dashboard/users", UserController::class)->except(["index", "show", "create", "store"]);

    /* - product routes - */
    Route::resource("/dashboard/products", ProductController::class)->except(["index"]);
});

/* routes only accessible to Administrators and Accantants */
Route::middleware(["auth", "verified", "role:Admin,Accountant"])->group(function () {
    /* - management routes - */
    Route::resource("/dashboard/management", ManagementController::class)->only(['index', 'show', 'create', 'store']);
});

require __DIR__ . "/auth.php";
