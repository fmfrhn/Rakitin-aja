<?php

use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;


Route::get('/', function () {
    return redirect()->route('homepage');
});

Route::get('/home',[HomeController::class, 'index'])->name('homepage');

Route::get('/select-category', [QuestionController::class, 'index'])->name('select.category');

Route::post('/select-category/questions', [QuestionController::class, 'showQuestionCategory'])->name('category.question');
Route::get('/select-category/questions/{q_id}', [QuestionController::class, 'showQuestion'])->name('category.question.show');
Route::post('/answer-calculation', [QuestionController::class, 'answerCalculation'])->name('submit.answer');
Route::get('/result-category', [QuestionController::class, 'recommendation'])->name('result.sparepart');
Route::get('/reccomendation-sparepart', [QuestionController::class, 'result'])->name('result');

Route::post('/history', [HistoryController::class, 'history'])->name('history')->middleware('auth');
Route::get('/history-page', [HistoryController::class, 'historyPage'])->name('history.page')->middleware('auth');


Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'autentikasi'])->name('auth.login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'formRegistrasi'])->name('halamanregister')->middleware('guest');
Route::post('/register', [RegisterController::class, 'registrasi'])->name('registrasi');

// Route::resource('/dashboard', adminDashboardController::class)->names([
//     'index' => 'administrator.dashboard.index',
//     'edit' => 'administrator.dashboard.edit',
//     'destroy' => 'administrator.dashboard.delete',
//     'create' => 'administrator.dashboard.create',
//     'update'=>'administrator.dashboard.update'

// ])->middleware(AdminMiddleware::class, 'handle');



