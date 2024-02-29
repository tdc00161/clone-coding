<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;

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
    return view('welcome');
});

Route::get('/login',[AuthController::class, 'loginget'])->name('login.get'); //로그인
Route::middleware('LoginValidation')->post('/login',[AuthController::class, 'loginpost'])->name('login.post');
Route::get('/signup',[AuthController::class, 'signupget'])->name('signup.get'); //회원가입
Route::middleware('signupValidation')->post('/signup',[AuthController::class, 'signuppost'])->name('signup.post');
Route::get('/forget',[AuthController::class, 'forgetget'])->name('forget.get'); //비밀번호찾기

Route::get('/',[BoardController::class, 'boardmain'])->name('main');//메인화면
