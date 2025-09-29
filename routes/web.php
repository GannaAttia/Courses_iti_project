<?php

use App\Http\Controllers\Users\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

//Route::get('/',AdminController::class);

Route::prefix("/user")->name("user.")->group(function(){
Route::controller(StudentController::class)->group(function(){
Route::get("/students",'index')->name('index');
Route::get("/students/course",'course')->name('course');

});
});

Route::controller(AuthController::class)->group(function(){
Route::get('/login','login')->name('login');
Route::get('/register','register')->name('register');
Route::get('/logout','logout')->name('logout');
Route::post('/handlelogin','handlelogin')->name('handlelogin');
Route::get('uri: /handleregister','handleregister')->name('handleregister');


});