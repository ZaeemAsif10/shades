<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;





Route::get('/logout',[App\Http\Controllers\Auth\LoginController::class, 'logout']);
Auth::routes();



Route::group(['middleware' => 'admin'], function (){
    // Employee Routes..
    
    Route::get('/admin-home', function () {
     return view('admin-side.admin-home');
 });
    Route::get('admin',[AdminController::class, 'index']);
    //team routes..
    Route::get('add-team',[AdminController::class, 'addTeam']);
    Route::post('add-team',[AdminController::class, 'saveTeam']);
    Route::get('all-team',[AdminController::class, 'allTeam']);
    Route::get('show-team',[AdminController::class, 'showTeam']);
    Route::get('edit-team',[AdminController::class, 'editTeam']);
    Route::post('update-team',[AdminController::class, 'updateTeam']);
    Route::get('delete-team',[AdminController::class, 'deleteTeam']);
    
    //Project Routes..
    Route::get('all-project',[ProjectController::class, 'index']);
    Route::get('show-project',[ProjectController::class, 'showProject']);
    Route::get('add-project',[ProjectController::class, 'addProject']);
    Route::post('store-project',[ProjectController::class, 'storeProject']);
    Route::get('edit-project',[ProjectController::class, 'editProject']);
    Route::post('update-project',[ProjectController::class, 'updateProject']);
    Route::get('delete-project',[ProjectController::class, 'deleteProject']);
    
    //Service Routes
    Route::get('all-service',[ServiceController::class, 'index']);
    Route::get('show-service',[ServiceController::class, 'showService']);
    Route::get('add-service',[ServiceController::class, 'addService']);
    Route::post('store-service',[ServiceController::class, 'storeService']);
    Route::get('edit-service',[ServiceController::class, 'editService']);
    Route::post('update-service',[ServiceController::class, 'updateService']);
    Route::get('delete-service',[ServiceController::class, 'deleteService']);
    
    //

 
});




// web routes

    Route::get('/', function () {
     return view('web-side.home');
 });


    Route::get('/about', function () {
     return view('web-side.about-us');
 });

    Route::get('/services', function () {
     return view('web-side.services');
 });

    Route::get('/our-work', function () {
     return view('web-side.our-work');
 });


    Route::get('/team', function () {
     return view('web-side.team');
 });

    Route::get('/contact', function () {
     return view('web-side.contact');
 });

    Route::post('contact',[UserHomeController::class, 'index']);



