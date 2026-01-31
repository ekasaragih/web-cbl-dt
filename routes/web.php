<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;

Route::get('/', [PageController::class, 'index'])->name('beranda');
Route::get('/sintaks', [PageController::class, 'sintaks'])->name('sintaks');
Route::get('/panduan', [PageController::class, 'panduan'])->name('panduan');
Route::get('/perangkat', [PageController::class, 'perangkat'])->name('perangkat');
Route::get('/evaluasi', [PageController::class, 'evaluasi'])->name('evaluasi');

// Route khusus Project (Tampil & Upload)
// Route::get('/project', [ProjectController::class, 'index'])->name('project');
// Route::post('/project', [ProjectController::class, 'store'])->name('project.store');

// route for project (for students)
Route::get('/project', [PageController::class, 'project'])->name('project');
