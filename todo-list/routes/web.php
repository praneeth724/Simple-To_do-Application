<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::get('/tasks/{id}/complete', [TaskController::class, 'update'])->name('tasks.complete');
Route::delete('/tasks/{id}', [TaskController::class, 'destroy'])->name('tasks.destroy');