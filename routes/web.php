<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TodoController;

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

Route::get('/', function(){
    return view('master.index');
})->name('home');

Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index'])->name('todos');
Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todos.create');
Route::post('/todos/store', [App\Http\Controllers\TodoController::class, 'store'])->name('todos.store');
Route::get('/todos/{id}/show', [App\Http\Controllers\TodoController::class, 'show'])->name('todos.show');
Route::delete('/todos/{id}/delete', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todos.delete');
Route::get('/todos/{id}/edit', [App\Http\Controllers\TodoController::class, 'edit'])->name('todos.edit');


