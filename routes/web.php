<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProfessorController;
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

Route::get('/', [MainController::class,'index']);
Route::get('/professor', [ProfessorController::class,'index']);
Route::get('/game', [GameController::class,'index']);
Route::post('/game', [GameController::class,'store']);
Route::post('/ajax/request', [MainController::class,'store'])->name('ajax.request');
Route::post('/ajax/professor', [ProfessorController::class,'store'])->name('ajax.professor');

Route::get('/admin', [AdminController::class,'index']);

