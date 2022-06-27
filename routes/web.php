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



// Auth Routes
// Route::middleware(['auth'])->group(function(){

    Route::get('/', function(){
        return view('master.index');
    })->name('home');
    // ->middleware('auth');
    
    Route::get('/todos', [App\Http\Controllers\TodoController::class, 'index'])->name('todos');
    Route::get('/todos/create', [App\Http\Controllers\TodoController::class, 'create'])->name('todos.create');
    Route::post('/todos/store', [App\Http\Controllers\TodoController::class, 'store'])->name('todos.store');
    Route::get('/todos/{id}/show', [App\Http\Controllers\TodoController::class, 'show'])->name('todos.show');
    Route::delete('/todos/{id}/delete', [App\Http\Controllers\TodoController::class, 'destroy'])->name('todos.delete');
    Route::get('/todos/{id}/edit', [App\Http\Controllers\TodoController::class, 'edit'])->name('todos.edit');
    Route::put('/todos/{id}/update', [App\Http\Controllers\TodoController::class, 'update'])->name('todos.update');
    Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');
// });


// Guest Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'store'])->name('login');

Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
Route::post('/register', [App\Http\Controllers\Auth\RegisterController::class, 'store'])->name('register.store');
