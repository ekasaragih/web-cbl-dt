<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\GateController;

// role session
Route::get('/gate', [GateController::class, 'chooseRole'])->name('gate');
Route::post('/gate/role', [GateController::class, 'setRole'])->name('gate.role');

Route::get('/otp', [GateController::class, 'otpForm'])->name('otp');
Route::post('/otp', [GateController::class, 'verifyOtp'])->name('otp.verify');

// sign out from role - forget session
Route::post('/sign-out-role', [GateController::class, 'signOutRole'])->name('role.signout');

Route::get('/', [PageController::class, 'index'])->name('beranda');
Route::get('/sintaks', [PageController::class, 'sintaks'])->name('sintaks');
Route::get('/panduan', [PageController::class, 'panduan'])->name('panduan');
Route::get('/perangkat', [PageController::class, 'perangkat'])->name('perangkat');

// project (for students)
Route::get('/project', [PageController::class, 'project'])->name('project');
Route::post('/project', [ProjectController::class, 'store'])->name('project.store');

// evaluasi (for lecturer)
Route::get('/evaluasi', [ProjectController::class, 'index'])->name('evaluasi');
Route::post('/evaluasi', [ProjectController::class, 'store'])->name('store');

