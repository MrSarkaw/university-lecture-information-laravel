<?php

use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('users', UserController::class)->names('admin.users');
    Route::resource('colleges', CollegeController::class)->names('admin.colleges');
    Route::resource('departments', DepartmentController::class)->names('admin.departments');
});
