<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\CustomPageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FaqController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\PartnerController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\TestimonialController;




// Route::group(['middleware' => 'auth'], function (){
    Route::group(['as' => 'backend.', 'prefix' => 'backend/'], function (){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('faq', FaqController::class);
        Route::resource('blog', BlogController::class);
        Route::resource('gallery', GalleryController::class);
        Route::resource('partner', PartnerController::class);
        Route::resource('testimonial', TestimonialController::class);
        Route::resource('customPage', CustomPageController::class);
        Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
        Route::post('profile-password-update', [ProfileController::class, 'profilePasswordUpdate'])->name('profilePasswordUpdate');
        Route::post('profile-info-update', [ProfileController::class, 'profileInfoUpdate'])->name('profileInfoUpdate');
    });
// });
