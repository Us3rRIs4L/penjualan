<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SalesmanController;

Route::get('/', [ReportController::class, 'index'])->name('dashboard');

Route::get('/orders', [OrderController::class, 'index'])->name('orders');

Route::get('/orders/{order}/edit', [OrderController::class, 'edit'])->name('orders.edit');

Route::get('/orders/{order}/destroy', [OrderController::class, 'destyoy'])->name('orders.destroy');

Route::get('/customers', [CustomerController::class, 'index'])->name('customers');

Route::get('/customers/{customer}/edit', [OrderController::class, 'edit'])->name('customers.edit');

Route::get('/customers/{customer}/destroy', [OrderController::class, 'destyoy'])->name('customers.destroy');

Route::get('/salesman', [SalesmanController::class, 'index'])->name('salesman');

Route::get('/salesman/{salesman}/edit', [SalesmanController::class, 'edit'])->name('salesman.edit');

Route::get('/salesman/{salesman}/destroy', [SalesmanController::class, 'destyoy'])->name('salesman.destroy');
