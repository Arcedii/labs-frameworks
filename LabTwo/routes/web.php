<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/{id}', [TaskController::class, 'show'])->where('id', '[0-9]+')->name('tasks.show');
});

Route::resource('tasks', TaskController::class);

use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::resource('tasks', TaskController::class);

