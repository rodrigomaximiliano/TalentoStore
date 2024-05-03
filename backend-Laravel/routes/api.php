<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Models\Cart;

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

Route::post('auth/register', [AuthController::class, 'create']);
Route::post('auth/login', [AuthController::class, 'login']);


Route::middleware('auth:sanctum')->group(function () {
    Route::resource('products', ProductController::class);
    Route::get('auth/logout', [AuthController::class, 'logout']);
    Route::post('/add_cart/{id}', [CartController::class, 'add_cart']);
    Route::get('/show_cart', [CartController::class, 'show_cart']);
    Route::delete('/remove_cart/{id}', [CartController::class, 'remove_cart']);
    Route::get('/show_order', [OrderController::class, 'show_order']);
    Route::get('/cash_order', [OrderController::class, 'cash_order']);
    Route::get('/cancel_order/{id}', [OrderController::class, 'cancel_order']);
    Route::post('stripe/{totalprice}', [CartController::class, 'stripePost'])->name('stripe.post');
});
