<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/projects', [ProjectController::class,'index'])->name('projects');
