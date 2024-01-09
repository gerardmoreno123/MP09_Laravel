<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[UserController::class,'index']);
Route::get('/users',[UserController::class,'index']);

Route::get('/contact',[PagesController::class,'contact']);
Route::get('/about',[PagesController::class,'about']);

Route::get('/task',[TaskController::class, 'task']);
