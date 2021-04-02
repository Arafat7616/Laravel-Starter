<?php

use App\Http\Controllers\Application\SettingController;
use Illuminate\Support\Facades\Route;



Route::group(['as' => 'application.', 'prefix' => 'application/'], function (){
    Route::group(['as' => 'image.', 'prefix' => 'image/'], function (){
        Route::post('/no-image', [SettingController::class, 'noImage'])->name('noImage');
        Route::post('/fav-icon', [SettingController::class, 'favIcon'])->name('favIcon');
        Route::post('/backend-logo', [SettingController::class, 'backendLogo'])->name('backendLogo');
        Route::post('/frontend-logo', [SettingController::class, 'frontendLogo'])->name('frontendLogo');
        Route::post('/backend-light-logo', [SettingController::class, 'backendLightLogo'])->name('backendLightLogo');
        Route::post('/backend-text-logo', [SettingController::class, 'backendTextLogo'])->name('backendTextLogo');
        Route::post('/backend-text-light-logo', [SettingController::class, 'backendTextLightLogo'])->name('backendTextLightLogo');
        Route::post('/breadcrumb-image', [SettingController::class, 'breadcrumbImage'])->name('breadcrumbImage');
    });

    Route::get('/seo-static-option-form', [SettingController::class, 'seoStaticOptionForm'])->name('seoStaticOptionForm');
    Route::get('/app-static-form', [SettingController::class, 'appStaticForm'])->name('appStaticForm');
    Route::get('/logo-and-image-static-option-form', [SettingController::class, 'logoAndImageStaticOptionForm'])->name('logoAndImageStaticOptionForm');
    Route::get('/social-static-option-form', [SettingController::class, 'socialStaticOptionForm'])->name('socialStaticOptionForm');
    Route::get('/company-detail-static-option-form', [SettingController::class, 'companyDetailStaticOptionForm'])->name('companyDetailStaticOptionForm');
    Route::get('/custom-script-static-option-form', [SettingController::class, 'customScriptStaticOptionForm'])->name('customScriptStaticOptionForm');
    Route::get('/fb-page-static-option-form', [SettingController::class, 'fbPageStaticOptionForm'])->name('fbPageStaticOptionForm');
    Route::get('/map-link-static-option-form', [SettingController::class, 'mapLinkStaticOptionForm'])->name('mapLinkStaticOptionForm');
    Route::get('/footer-credit-static-option-form', [SettingController::class, 'footerCreditStaticOptionForm'])->name('footerCreditStaticOptionForm');



    Route::post('/app-static-option-update', [SettingController::class, 'appStaticOptionUpdate'])->name('appStaticOptionUpdate');
    Route::post('/seo-static-option-update', [SettingController::class, 'seoStaticOptionUpdate'])->name('seoStaticOptionUpdate');
    Route::post('/social-static-option-update', [SettingController::class, 'socialStaticOptionUpdate'])->name('socialStaticOptionUpdate');
    Route::post('/company-detail-static-option-update', [SettingController::class, 'companyDetailStaticOptionUpdate'])->name('companyDetailStaticOptionUpdate');
    Route::post('/custom-script-static-option-update', [SettingController::class, 'customScriptStaticOptionUpdate'])->name('customScriptStaticOptionUpdate');
    Route::post('/fb-page-static-option-update', [SettingController::class, 'fbPageStaticOptionUpdate'])->name('fbPageStaticOptionUpdate');
    Route::post('/map-link-static-option-update', [SettingController::class, 'mapLinkStaticOptionUpdate'])->name('mapLinkStaticOptionUpdate');
    Route::post('/footer-credit-static-option-update', [SettingController::class, 'footerCreditStaticOptionUpdate'])->name('footerCreditStaticOptionUpdate');
});

