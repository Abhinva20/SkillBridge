<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

// Pending Pages
Route::get('/student/find-instructor', function(){ })->name('find.instructor');
Route::get('/student/my-courses', function(){ })->name('my.courses');
Route::get('/student/mock-tests', function(){ })->name('mock.tests');
Route::get('/student/performance', function(){ })->name('performance');
Route::get('/student/certificates', function(){ })->name('certificates');
Route::get('/student/payments', function(){ })->name('payments');
Route::get('/student/settings', function(){ })->name('settings');

Route::get('/teacher/my-classes', function(){ })->name('my.classes');
Route::get('/teacher/students', function(){ })->name('students');
Route::get('/teacher/materials', function(){ })->name('materials');
Route::get('/teacher/earnings', function(){ })->name('earnings');
