<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\RegisterRequest;


class AuthController extends Controller
{
    //로그인 화면
    public function loginget() {

        return view('/login');
    }

    //로그인 정보전달
    public function loginpost(Request $request) {

        $remember= true;

        Log::debug("응답", [$request]);

        $userInfo = $request->only('email','password');

        if(($request->email || $request->password) === '') {
            $errorMsg = '아이디와 비밀번호를 입력해주세요';
            return back()->withErrors($errorMsg);
        }

        Log::debug("첫번째 통과",[$request]);

        $user = User::where('email', $request->email)->first();
        if(!$user || !(Hash::check($request->password, $user->password))) {
            $errorMsg = '아이디와 비밀번호를 입력해주세요';
            return back()->withErrors($errorMsg);
        }
        Log::debug("두번째 통과",[$user]);

        if(Auth::attempt($userInfo)) {
            session(['user' => $user]);
        } else {
            $errorMsg = '인증 오류가 났습니다.';
            return redirect('/login')->withErrors($errorMsg);
        }

        Log::debug("세번째 통과", [$user]);

        return redirect()->route('main');
    }

    //회원가입 화면
    public function signupget() {

        if(Auth::check()) {
            return redirect('/board');
        }

        return view('signup');
    }
    //회원가입 정보전달
    public function signuppost(Request $request) {

        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'name' => $request->input('name'),
            'agreed' => $request->input('agreed'),
        ]);

        return redirect()->route('login.get');
    }

    public function forgetget() {
        return view('forgetPw');
    }

    //로그아웃
    public function loginout() {

        $user = Auth::user();

        if($user) {
            $user->setRememberToKen(null);
            $user->save();
        }

        Session::flush(); // 세션파기
        Auth::logout(); // 로그아웃

        return redirect('/');
    }
}
