<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\TeacherCourseController;
use App\Http\Controllers\StudentCourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;

// Landing Page
Route::get('/', function () {return view('welcome');});

// Login, Logout and Register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboards
Route::get('/student/dashboard', function () {return view('student.dashboard');})->name('student.dashboard')->middleware('auth');
Route::get('/teacher/dashboard', function () {return view('teacher.dashboard');})->name('teacher.dashboard')->middleware('auth');

// HomePage
Route::get('/student/home', function () {return view('student.home');})->name('student.home')->middleware('auth');
Route::get('/teacher/home', function () {return view('teacher.home');})->name('teacher.home')->middleware('auth');
Route::get('/admin/dashboard', function () {return view('admin.dashboard');})->name('admin.dashboard')->middleware('auth:admin');

// Admin auth
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
Route::post('/admin/register', [AdminAuthController::class, 'register'])->name('admin.register.submit');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Course Creation
Route::middleware(['auth'])->group(function () {
    Route::get('/teacher/course/create', [TeacherCourseController::class, 'create'])->name('teacher.course.create');
    Route::post('/teacher/course/store', [TeacherCourseController::class, 'store'])->name('teacher.course.store');
});

// Search Courses
Route::middleware(['auth'])->group(function () {
    Route::get('/student/find-courses', [StudentCourseController::class, 'index'])->name('student.find.courses');
});

// Settings page
Route::get('/student/settings', [App\Http\Controllers\StudentController::class, 'settings'])->name('settings');
Route::post('/student/settings/update', [App\Http\Controllers\StudentController::class, 'updateSettings'])->name('settings.update');
Route::get('/teacher/settings', [App\Http\Controllers\TeacherController::class, 'settings'])->name('teacher.settings');
Route::post('/teacher/settings/update', [App\Http\Controllers\TeacherController::class, 'updateSettings'])->name('teacher.settings.update');


// Pending Pages
Route::get('/student/find-instructor', function(){ })->name('find.instructor');
Route::get('/student/my-courses', function(){ })->name('my.courses');
Route::get('/student/mock-tests', function(){ })->name('mock.tests');
Route::get('/student/performance', function(){ })->name('performance');
Route::get('/student/certificates', function(){ })->name('certificates');
Route::get('/student/payments', function(){ })->name('payments');
// Route::get('/student/settings', function(){ })->name('settings');

Route::get('/teacher/my-classes', function(){ })->name('my.classes');
Route::get('/teacher/students', function(){ })->name('students');
Route::get('/teacher/materials', function(){ })->name('materials');
Route::get('/teacher/earnings', function(){ })->name('earnings');
