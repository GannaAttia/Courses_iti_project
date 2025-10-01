<?php

use App\Http\Controllers\Users\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;




Route::prefix("/user")->name("user.")->group(function () {

        Route::controller(AdminController::class)->group(function(){
           Route::get('/dashboard','dashboard')->name('dashboard');
           Route::get("/courses/create",'create')->name('create');
           Route::post("/courses",'store')->name('store');
           Route::get("/courses/{id}",'show')->where(['id'=>'[0-9]+'])->name('show');
           Route::delete("/courses/{id}",'destroy')->where(['id'=>'[0-9]+'])->name('destroy');
           Route::get("/courses/{id}/edit",'edit')->where(['id'=>'[0-9]+'])->name('edit');
           Route::put("/courses/{id}",'update')->where(['id'=>'[0-9]+'])->name('update');







});

    Route::controller(StudentController::class)->group(function () {
        Route::get("/students", 'index')->name('index');
      
        Route::get("/students/course", 'course')->middleware('auth')->name('course');
        Route::get("/students/profile",'profile')->middleware('auth')->where(['id'=>'[0-9]+'])->name('profile');
        Route::get('/students/profile/edit', 'editProfile')->middleware('auth')->name('profile.edit');
        Route::put('/students/profile/update', 'updateProfile')->middleware('auth')->name('profile.update');


    });
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::post('/handlelogin', 'handlelogin')->name('handlelogin');

    Route::get('/register', 'register')->name('register');
    Route::post('/handleregister', 'handleregister')->name('handleregister');

    Route::get('/logout', 'logout')->name('logout');
    Route::get("/profile", 'profile')->middleware('auth')->name('profile');
});
