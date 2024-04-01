<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {

    // Tasks
    Route::name('tasks.')
        ->prefix('tasks')
        ->controller(TaskController::class)
        ->group(function () {
            Route::get('/', 'index')->name('index')->middleware('MyMiddleware:admin|user');
            Route::post('', 'store')->name('store')->middleware('MyMiddleware:admin');
            Route::get('/create', 'create')->name('create')->middleware('MyMiddleware:admin');
            Route::get('{task}', 'show')->name('show')->middleware('MyMiddleware:admin|user');
            Route::get('edit/{task}', 'edit')->name('edit')->middleware('MyMiddleware:admin|user');
            Route::put('{task}', 'update')->name('update')->middleware('MyMiddleware:admin|user');
            Route::delete('{task}', 'destroy')->name('delete')->middleware('MyMiddleware:admin');
        });
});


require __DIR__ . '/auth.php';
