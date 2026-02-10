<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthViewController;
use App\Http\Controllers\Web\OrderViewController;
use App\Http\Controllers\Web\DeliveryNoteViewController;
use App\Http\Controllers\Web\InvoiceViewController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Route::get('/login', [AuthViewController::class, 'loginForm'])->name('login.form');

Route::get('/register', [AuthViewController::class, 'registerForm'])->name('register.form');

Route::get('/orders-view', [OrderViewController::class, 'index']);

Route::get('/deliverynotes-view', [DeliveryNoteViewController::class, 'index']);

Route::get('/invoices-view', [InvoiceViewController::class, 'index']);
