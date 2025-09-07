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

Route::get('/', [LandingPageController::class, 'index']);

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('abouts', [AboutController::class, 'index'])->name('abouts.index');
    Route::put('abouts/{about}', [AboutController::class, 'update'])->name('abouts.update');
    Route::resource('carousels', CarouselController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('study-programs', StudyProgramController::class);
    Route::resource('achievements', AchievementController::class);
    Route::resource('messages', ContactMessageController::class)->only(['index','show','destroy']);
    Route::resource('settings', SettingController::class)->only(['index','update']);
});
