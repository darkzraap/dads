<?php

use App\Http\Controllers\DirectorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/projects', [ProjectController::class,'index'])->name('projects');

Route::get('/directors', [DirectorController::class,'index'])->name('directors');
Route::get('/organizations', [DirectorController::class,'organization'])->name('organization');
