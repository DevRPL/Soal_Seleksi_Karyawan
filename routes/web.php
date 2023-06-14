<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/order/ticket', [OrderController::class, 'index'])->name('order.index');
Route::post('/order/create', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{id}/show', [OrderController::class, 'show'])->name('order.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/order/tickets', [OrderController::class, 'getAllOrder'])->name('order.getAllOrder');
    Route::get('/check/order/tickets', [OrderController::class, 'checkOrder'])->name('order.checkOrder');
    Route::post('/check/data-order/tickets', [OrderController::class, 'checkDataOrder'])->name('order.checkDataOrder');
    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
    Route::get('/data-report-order', [OrderController::class, 'reportOrder'])->name('order.reportOrder');
    Route::put('order/tickets/{id}', [OrderController::class, 'update'])->name('order.update');
    Route::get('order/tickets/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
});

require __DIR__.'/auth.php';
