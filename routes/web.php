<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/users', [TaskController::class, 'indexUsers']);
Route::get('/courses', [TaskController::class, 'indexCourses']);
Route::get('/courses/{id}', [TaskController::class, 'showCourse']);
Route::get('/users/{id}', [TaskController::class, 'showUser']);

Route::get('/', [TaskController::class, 'indexUsers']);

use App\Http\Controllers\CategoryController; 


Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
use App\Models\Category;
use App\Models\Product;

