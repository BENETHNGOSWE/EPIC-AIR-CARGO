<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Home\HomepageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Home\HomepageController::class, 'homepage'])->name('homepage');

$staticPages = ['about-us' => 'about', 'process' => 'process', 'services' => 'services', 'contact' => 'contact'];
foreach ($staticPages as $slug => $view) {
    Route::get('/' . $slug, fn () => view('frontend.pages.' . $view))->name($slug);
}

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

