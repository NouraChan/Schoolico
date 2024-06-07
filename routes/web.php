<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\ScheduleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'subject'], function () {
    Route::get('/create', [SubjectController::class, 'create'])->name('subject.create');
    Route::post('/store', [SubjectController::class, 'store'])->name('subject.store');
    Route::delete('/destroy', [SubjectController::class, 'destroy'])->name('subject.destroy');
    Route::get('/index', [SubjectController::class, 'index'])->name('subject.index');
    Route::post('/update', [SubjectController::class, 'update'])->name('subject.update');
    Route::get('/edit', [SubjectController::class, 'edit'])->name('subject.edit');
});

Route::group(['prefix' => 'schedule'], function () {
    Route::get('/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::delete('/destroy', [ScheduleController::class, 'destroy'])->name('schedule.destroy');
    Route::get('/index', [ScheduleController::class, 'index'])->name('schedule.index');
    Route::post('/update', [ScheduleController::class, 'update'])->name('schedule.update');
    Route::get('/edit', [ScheduleController::class, 'edit'])->name('schedule.edit');
});