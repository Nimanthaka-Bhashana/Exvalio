<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Inspector\InspectorDashboardController;
use App\Http\Controllers\User\UserDashboardController;
use App\Http\Controllers\User\UserItemController;


Route::get('/', function () {
   return redirect()->route('login');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])
        ->name('admin.dashboard');
});

Route::middleware(['auth', 'role:inspector'])->group(function () {
    Route::get('/inspector/dashboard', [InspectorDashboardController::class, 'index'])
        ->name('inspector.dashboard');
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
    
    Route::get('/item/add', [UserItemController::class, 'index'])->name('user.item.add');
    Route::post('/item/store', [UserItemController::class, 'store'])->name('user.item.store');
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
