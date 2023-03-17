<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index'])->name('todo.index');
Route::post('/store', [TodoController::class, 'store'])->name('todo.store');
Route::get('/change-status/{id}', [TodoController::class, 'changeStatus'])->name('todo.change-status');
Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('todo.edit');
Route::post('/update', [TodoController::class, 'update'])->name('todo.update');
Route::get('/delete/{id}', [TodoController::class, 'delete'])->name('todo.delete');
