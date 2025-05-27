<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CourseController;
use App\Http\Controllers\admin\ClassroomController;
use App\Http\Controllers\admin\StudentCommentController;

Route::get('/', [HomeController::class, 'index'])->name('web.home');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/course', [CourseController::class, 'index'])->name('admin.course');
Route::get('/admin/classroom', [ClassroomController::class, 'index'])->name('admin.classroom');
Route::get('/admin/student-comment', [StudentCommentController::class, 'index'])->name('admin.student_comment');
Route::post('/admin/student-comment', [StudentCommentController::class, 'store'])->name('admin.student_comment.store');