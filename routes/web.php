<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\NodeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\StackController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('home');

Route::resource('dashboard', DashboardController::class)->only(['index']);
Route::resource('nodes', NodeController::class)->only(['index', 'show']);
Route::resource('services', ServiceController::class)->only(['index', 'show']);
Route::resource('networks', NetworkController::class)->only(['index', 'show']);
Route::resource('stacks', StackController::class)->only(['index', 'show']);
