<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\PageController;
use App\Http\Controllers\Front\CounselingController;
use App\Http\Controllers\Front\ArticleController;
use App\Http\Controllers\Front\Forum\ThreadController;
use App\Http\Controllers\Front\MediaController;
use App\Http\Controllers\Front\AssessmentController;
use App\Http\Controllers\Admin\DashboardController;

// --- PUBLIC GROUP ---
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/layanan', [PageController::class, 'services'])->name('services');
Route::get('/artikel', [ArticleController::class, 'index'])->name('articles.index');

// --- STUDENT GROUP (Auth Placeholder) ---
Route::prefix('student')->name('student.')->group(function () {
    // Layanan BK
    Route::get('/booking/create', [CounselingController::class, 'create'])->name('booking.create');
    Route::post('/booking', [CounselingController::class, 'store'])->name('booking.store');
    
    // Media & Asesmen
    Route::get('/media', [MediaController::class, 'index'])->name('media.index');
    Route::get('/asesmen', [AssessmentController::class, 'index'])->name('assessment.index');
    
    // Forum
    Route::resource('forum', ThreadController::class);
});

// --- ADMIN GROUP (Auth Placeholder) ---
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
