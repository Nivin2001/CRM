<?php

use App\Http\Controllers\CoustomersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
// Route::get('/coustomers',[CoustomersController::class,'index'])->name('coustomers.index');
// Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
// Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
// Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
// Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
// Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
// Route::delete('/customers/{customer}', [CustomerController::class, 'destroy'])->name('customers.destroy');




Route::resource('coustomers',CoustomersController::class );

