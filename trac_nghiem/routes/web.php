<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/dang-nhap', function () {
    return view('login');
})->name('login');

Route::post('/dang-nhap', [HomeController::class, 'loginSubmit'])->name('login.submit');
Route::post('/dang-nhap-lam-bai', [HomeController::class, 'loginExam'])->name('login.exam');
Route::middleware(['CheckExam'])->group(function () {

    Route::get('/kiem-tra', [HomeController::class, 'exam'])->name('exam');

    Route::post('/nop-bai', [HomeController::class, 'examSubmit'])->name('exam.submit');
    Route::get('/ket-qua-thi',  [HomeController::class, 'result'])->name('result');
});

Route::middleware(['CheckAuth'])->group(function () {
    Route::get('/quan-tri',  [HomeController::class, 'admin'])->name('admin');
});
