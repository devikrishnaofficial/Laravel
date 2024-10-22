<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CrudController;
use App\Models\Usercrd;

Route::get('/', function () {
    return view('crud.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('admin/dashboard',[HomeController::class,'index'])->name('admin/dashboard');
Route::get('user/dashboard',[HomeController::class,  'uindex'])->name('user/dashboard');

Route::get('adduser',[CrudController::class,'index']);
Route::post('adddetails',[CrudController::class,'add']);
Route::get('view',[CrudController::class,'view']);
Route::get('toedit/{id}', [CrudController::class, 'edit']);
Route::post('update/{id}', [CrudController::class, 'update']);
