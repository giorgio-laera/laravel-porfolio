<?php

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// use middlewares for new route admin
Route::middleware(['auth','verified'])
->name('admin.')
->prefix('admin')
->group(function(){
    //create new route for admin
    Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');
     Route::get('/profile', [DashboardController::class, 'profile'])
    ->name('profile');
});

Route::resource('project',ProjectController::class);
// ->middleware(['auth', 'verified']) ;

Route::resource('type',TypeController::class);
// ->middleware(['auth', 'verified']) ;
require __DIR__.'/auth.php';
