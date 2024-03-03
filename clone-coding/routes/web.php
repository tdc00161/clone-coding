<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\SubscribeController;

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
Route::get('/loginout',[AuthController::class, 'loginout'])->name('login.out'); //로그아웃

Route::get('/',[BoardController::class, 'boardmain'])->name('main');//메인화면
Route::get('/post',[BoardController::class, 'postGet'])->name('post.get');//게시글 작성
Route::post('/post',[BoardController::class, 'postCreate'])->name('post.create');//게시글 정보 전송
Route::get('/post/{id}',[BoardController::class, 'postDetail'])->name('post.detail');//게시글 상세
Route::get('/search',[BoardController::class, 'search'])->name('search');//검색
Route::post('/news',[SubscribeController::class, 'newsletter'])->name('news.post');//구독
Route::get('/tag/{category}',[BoardController::class, 'tag'])->name('tag.get');//탭메뉴 화면