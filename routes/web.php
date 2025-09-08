<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ContactMessageController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\StudyProgramController;

Route::get('/', [LandingPageController::class, 'index'])->name('landingPage.home');
Route::get('achievements', [LandingPageController::class, 'achievements'])->name('landingPage.achievements');
Route::get('galleries', [LandingPageController::class, 'galleries'])->name('landingPage.galleries');
Route::POST('messages', [ContactMessageController::class, 'store'])->name('messages.store');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::prefix('dashboard/')->group(function () {
        Route::get('abouts', [AboutController::class, 'index'])->name('abouts.index');
        Route::put('abouts/{about}', [AboutController::class, 'update'])->name('abouts.update');
    
        Route::resource('carousels', CarouselController::class);
        Route::put('carousels/activate/{carousel}', [CarouselController::class, 'activate'])->name('carousels.activate');
    
        Route::resource('galleries', GalleryController::class);
    
        Route::resource('study-programs', StudyProgramController::class);
    
        Route::resource('achievements', AchievementController::class);
    
        Route::GET('messages', [ContactMessageController::class, 'index'])->name('messages.index');
        Route::GET('messages/{message}', [ContactMessageController::class, 'show'])->name('messages.show');
        
    });
});
