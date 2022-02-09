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
});

Route::post('/login', [HomeController::class, 'loginSubmit'])->name('login.submit');

Route::get('/exam', [HomeController::class, 'exam'])->name('exam');

Route::post('/exam', [HomeController::class, 'examSubmit'])->name('exam.submit');
Route::get('/result',  [HomeController::class, 'result'])->name('result');