<?php

use App\Http\Controllers\BikeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[BikeController::class,'index'])->name('index');
Route::post('/',[BikeController::class,'store'])->name('store');
Route::get('/edit/{id}',[BikeController::class,'edit'])->name('edit');
Route::post('/update/{id}',[BikeController::class,'update'])->name('update');
Route::get('/delete/{id}',[BikeController::class,'delete'])->name('delete');
