<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';
Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
Route::get('toadd', [HomeController::class, 'toadd']);
Route::post('add', [HomeController::class, 'add']);
Route::get('view', [HomeController::class, 'view']);
Route::get('delete/{id}', [HomeController::class, 'delete']);
Route::get('edit/{id}', [HomeController::class, 'edit']);
Route::post('update/{id}', [HomeController::class, 'update']);