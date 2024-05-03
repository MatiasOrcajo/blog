<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/store-post', [\App\Http\Controllers\HomeController::class, 'store'])->name('store.post');
    Route::post('/store-image-ckeditor', [\App\Http\Controllers\ImageController::class, 'uploadCKEditorImage'])->name('store.image.ckeditor');
});

require __DIR__.'/auth.php';
