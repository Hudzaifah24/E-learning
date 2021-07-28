<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardSubjectController;
use App\Http\Controllers\DashboardTheoryController;
use App\Http\Controllers\DashboardVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherIdController;
use App\Http\Controllers\TheoriesController;
use App\Http\Controllers\VideosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('subject', [SubjectController::class, 'index'])->name('subject');

Route::get('theories', [TheoriesController::class, 'index'])->name('theories');

Route::get('videos', [VideosController::class, 'index'])->name('videos');

Route::get('videos/detail/{id?}', [VideosController::class, 'detail'])->name('videosDetail');

Route::prefix('login')->group(function(){
    Route::get('/teacher', function() {
        return view('auth.loginTeacher');
    })->name('login-teacher');
    Route::get('/student', function() {
        return view('auth.loginStudent');
    })->name('login-student');
});

Route::prefix('register')->group(function(){
    Route::get('/teacher', function() {
        return view('auth.registerTeacher');
    })->name('register-teacher');
    Route::get('/student', function() {
        return view('auth.registerStudent');
    })->name('register-student');
});

// dashboard
Route::prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/subjects', [DashboardSubjectController::class, 'index'])->name('dashboardSubject');
    Route::get('/subjects/detail/{id}', [DashboardSubjectController::class, 'show'])->name('detailSubject');
    Route::get('/subjects/create', [DashboardSubjectController::class, 'create'])->name('createSubject');
    Route::get('/subjects/edit/{id}', [DashboardSubjectController::class, 'edit'])->name('editSubject');

    Route::get('/theories', [DashboardTheoryController::class, 'index'])->name('dashboardTheory');
    Route::get('/theories/detail/{id}', [DashboardTheoryController::class, 'show'])->name('detailTheory');
    Route::get('/theories/create', [DashboardTheoryController::class, 'create'])->name('createTheory');
    Route::get('/theories/edit/{id}', [DashboardTheoryController::class, 'edit'])->name('editTheory');

    Route::get('/videos', [DashboardVideoController::class, 'index'])->name('dashboardVideo');
    Route::get('/videos/detail/{id}', [DashboardVideoController::class, 'show'])->name('detailVideo');
    Route::get('/videos/create', [DashboardVideoController::class, 'create'])->name('createVideo');
    Route::get('/videos/edit/{id}', [DashboardVideoController::class, 'edit'])->name('editVideo');

    Route::get('/settings', [DashboardSettingController::class, 'index'])->name('dashboardSettings');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
