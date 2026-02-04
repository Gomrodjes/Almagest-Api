<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DeliveryNoteController;
use App\Http\Controllers\Api\InvoiceController;
use App\Http\Controllers\Api\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->group(function () {

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/orders/{order}', [OrderController::class, 'show']);
    Route::post('/orders', [OrderController::class, 'store']);

    Route::delete('/deliverynotes/{del_note}', [DeliveryNoteController::class, 'destroy']);
    Route::post('/deliverynotes/sign/{del_note}', [DeliveryNoteController::class, 'destroy']);

    Route::get('/invoices/{invoice}', [InvoiceController::class, 'show']);
    Route::delete('/invoices/{invoice}', [InvoiceController::class, 'destroy']);
    Route::match(['put', 'patch'], '/invoices/{invoice}', [InvoiceController::class, 'update']);

});
