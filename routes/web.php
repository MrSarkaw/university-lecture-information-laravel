<?php

use App\Http\Controllers\Admin\CollegeController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\LectureController;
use App\Http\Controllers\Admin\StageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PublicController::class, 'index'])->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::resource('users', UserController::class)->names('admin.users');
    Route::resource('colleges', CollegeController::class)->names('admin.colleges');
    Route::resource('departments', DepartmentController::class)->names('admin.departments');
    Route::resource('stages', StageController::class)->names('admin.stages');
    Route::resource('lectures', LectureController::class)->names('admin.lectures');
});
