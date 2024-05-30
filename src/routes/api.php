<?php

use App\Http\Controllers\ContactController;
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

Route::prefix('v1')
    ->namespace('App\Http\Controllers\Notebook')
    ->group(function () {
    Route::get('notebook', [ContactController::class, 'index'])->name('contact.index');
    Route::post('notebook', [ContactController::class, 'store'])->name('contact.create');
    Route::get('notebook/{contact}', [ContactController::class,'show'])->name('contact.show');
    Route::post('notebook/{contact}/edit', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('notebook/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
});

//Route::namespace('App\Http\Controllers\Notebook')
//    ->resource('v1/notebook', ContactController::class);
