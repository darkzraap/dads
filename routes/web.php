<?php

use App\Http\Controllers\AwardController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/projects', [ProjectController::class,'index'])->name('projects');
Route::get('/directors', [DirectorController::class,'index'])->name('directors');
Route::get('/news', [NewsController::class,'index'])->name('news');
Route::get('/awards', [AwardController::class,'index'])->name('awards');

