<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware("auth:sanctum")->get("/user", function (Request $request) {
    return $request->user();
});


/*
This route is set to pick up the rows from the order table in our
database and send them directly over to be picked up as JSON on
our API by using the link {{localhost}}/api/orders.
*/
Route::get('/orders', [OrderController::class, 'apiIndex']);