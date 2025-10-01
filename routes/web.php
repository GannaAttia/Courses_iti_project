<?php

use App\Http\Controllers\Users\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

<<<<<<< Updated upstream
// Route::get('/',AdminController::class);

Route::prefix("/user")->name("user.")->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get("/students", 'index')->name('index');

        Route::get("/students/course", 'course')->middleware('auth')->name('course');
        Route::get("/students/profile",'profile')->middleware('auth')->where(['id'=>'[0-9]+'])->name('profile');
        Route::get('/students/profile/edit', 'editProfile')->middleware('auth')->name('profile.edit');
        Route::put('/students/profile/update', 'updateProfile')->middleware('auth')->name('profile.update');

=======
<<<<<<< HEAD



Route::prefix("/user")->name("user.")->group(function(){


    Route::controller(AdminController::class)->group(function(){
Route::get('/dashboard','dashboard')->name('dashboard');
});

 Route::controller(StudentController::class)->group(function(){
  Route::get("/students",'index')->name('index');
  Route::get("/students/course",'course')->name('course');
  Route::get("/students/profile",'profile')->middleware('auth')->where(['id'=>'[0-9]+'])->name('profile');
=======
// Route::get('/',AdminController::class);

Route::prefix("/user")->name("user.")->group(function () {
    Route::controller(StudentController::class)->group(function () {
        Route::get("/students", 'index')->name('index');
>>>>>>> 49230c66d0f91e7d9e3a597e77e6f789ecac3e9b

        Route::get("/students/course", 'course')->middleware('auth')->name('course');
        Route::get("/students/profile",'profile')->middleware('auth')->where(['id'=>'[0-9]+'])->name('profile');
        Route::get('/students/profile/edit', 'editProfile')->middleware('auth')->name('profile.edit');
        Route::put('/students/profile/update', 'updateProfile')->middleware('auth')->name('profile.update');

>>>>>>> Stashed changes
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
