<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, 'index'])->name('allanimals');
Route::get('/{id}/show', [AnimalController::class, 'show']);
Route::get('/add/animal', [AnimalController::class, 'index2'])->name('addanimal');
Route::get('/{id}/edit', [AnimalController::class, 'index3'])->name('edit');
Route::post('/add/create', [AnimalController::class, 'store']);
Route::delete('/{id}/delete', [AnimalController::class, 'destroy']);
Route::put('/{id}/edit', [AnimalController::class, 'update']);
