<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [FrontendController::class , 'homepage'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.pages.index');
    })->middleware(['verified'])->name('dashboard');
    Route::get('/admin/logout' , [AdminController::class , 'logout'])->name('admin.logout');
    Route::get('/admin/edit/profile' , [AdminController::class , 'profileEdit'])->name('admin.edit.profile');
    Route::post('/admin/Update/profile' , [AdminController::class , 'profileUpdate'])->name('admin.update.profile');
    Route::get('/admin/Change/profile-Password' , [AdminController::class , 'profilePasswordChange'])->name('admin.change.password');
    Route::post('/admin/Change/profile-Password' , [AdminController::class , 'profilePasswordUpdate'])->name('admin.update.password');

    Route::get('hero-section' ,  [HeroController::class , 'heroSection'])->name('hero.section');
    Route::post('update-hero-section' ,  [HeroController::class , 'updateHeroSection'])->name('update.hero.section');

    Route::get('all-services' ,  [ServicesController::class , 'allServices'])->name('all.services');
    Route::get('add-service' ,  [ServicesController::class , 'addService'])->name('add.service');
    Route::post('store-service' ,  [ServicesController::class , 'storeService'])->name('store.service');
    Route::get('edit-service/{id}' ,  [ServicesController::class , 'editService'])->name('edit.service');
    Route::post('update-service' ,  [ServicesController::class , 'updateService'])->name('update.service');
    
});








require __DIR__.'/auth.php';
