<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HeroController;
use App\Http\Controllers\backend\ResumeController;
use App\Http\Controllers\backend\ServicesController;
use App\Http\Controllers\backend\SkillsController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/' , [FrontendController::class , 'homepage'])->name('home');

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function () {
        return view('admin.pages.index');
    })->middleware(['verified'])->name('dashboard');
    // admin basic routes
    Route::get('/admin/logout' , [AdminController::class , 'logout'])->name('admin.logout');
    Route::get('/admin/edit/profile' , [AdminController::class , 'profileEdit'])->name('admin.edit.profile');
    Route::post('/admin/Update/profile' , [AdminController::class , 'profileUpdate'])->name('admin.update.profile');
    Route::get('/admin/Change/profile-Password' , [AdminController::class , 'profilePasswordChange'])->name('admin.change.password');
    Route::post('/admin/Change/profile-Password' , [AdminController::class , 'profilePasswordUpdate'])->name('admin.update.password');
    // end admin basic routes

    // hero section routes
    Route::get('hero-section' ,  [HeroController::class , 'heroSection'])->name('hero.section');
    Route::post('update-hero-section' ,  [HeroController::class , 'updateHeroSection'])->name('update.hero.section');
    // end hero section routes

    // services route
    Route::get('all-services' ,  [ServicesController::class , 'allServices'])->name('all.services');
    Route::get('add-service' ,  [ServicesController::class , 'addService'])->name('add.service');
    Route::post('store-service' ,  [ServicesController::class , 'storeService'])->name('store.service');
    Route::get('edit-service/{id}' ,  [ServicesController::class , 'editService'])->name('edit.service');
    Route::post('update-service' ,  [ServicesController::class , 'updateService'])->name('update.service');
    Route::get('delete-service/{id}' ,  [ServicesController::class , 'deleteService'])->name('delete.service');
    // end services route

    // my experience routes
    Route::get('my-experience' ,  [ResumeController::class , 'myExperience'])->name('my.experience');
    Route::post('store-experience' ,  [ResumeController::class , 'storeExperience'])->name('store.experience');
    Route::get('edit-experience/{id}' ,  [ResumeController::class , 'editExperience']);
    Route::post('update-experience' ,  [ResumeController::class , 'updateExperience'])->name('update.experience');
    Route::get('delete-service/{id}' ,  [ResumeController::class , 'deleteExperience'])->name('delete.experience');
    // my experience routes end 

    // my education route 
        Route::get('my-education' ,  [ResumeController::class , 'myEducation'])->name('my.education');
        Route::post('store-experience' ,  [ResumeController::class , 'storeExperience'])->name('store.experience');
        Route::get('edit-experience/{id}' ,  [ResumeController::class , 'editExperience']);
        Route::post('update-experience' ,  [ResumeController::class , 'updateExperience'])->name('update.experience');
        Route::get('delete-service/{id}' ,  [ResumeController::class , 'deleteExperience'])->name('delete.experience');

    // my skill route 
        Route::get('add-skill' ,  [SkillsController::class , 'addSkill'])->name('add.skill');
        Route::post('store-skill' ,  [SkillsController::class , 'storeSkill'])->name('store.skill');
        Route::get('all-skill' ,  [SkillsController::class , 'allSkills'])->name('all.skill');
        Route::post('edit-skill/{id}' ,  [SkillsController::class , 'editSkill'])->name('edit.skill');
        Route::get('delete-skill/{id}' ,  [SkillsController::class , 'deleteSkill'])->name('delete.skill');
});








require __DIR__.'/auth.php';
