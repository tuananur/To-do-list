<?php
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('edit/{id}', [TodoController::class, 'edit'])->name('edit');
Route::get('index', [TodoController::class, 'index'])->name('index');
Route::get('create', [TodoController::class, 'create'])->name('create');
Route::post('store', [TodoController::class, 'store'])->name('store');
Route::post('update/{id}', [TodoController::class, 'update'])->name('update');
Route::delete('destroy/{id}', [TodoController::class, 'destroy'])->name('destroy');
Route::get('/todos', [TodoController::class, 'index'])->name('index');
