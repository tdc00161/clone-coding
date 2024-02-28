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
    public function loginget() {

        return view('/login');
    }

    public function loginpost(Request $request) {

        $user = User::where('email', $request->email)->first();
        if(!$user || !(Hash::check($request->password, $user->password))) {
            $errorMsg = '아이디와 비밀번호를 다시 확인해주세요.';
            // return redirect('/login')->withErrors($errorMsg);
        }

        Auth::login($user, $remember = true);
        if(Auth::check()) {
            session(['user' => $user]);
        } else {
            $errorMsg = '인증 오류가 났습니다.';
            // return redirect('/login')->withErrors($errorMsg);
        }

        return redirect()->route('board.main');
    }

    public function signupget() {

        if(Auth::check()) {
            return redirect('/board');
        }

        return view('signup');
    }

    public function signuppost(RegisterRequest $request) {

        dump($request);

        $user = User::create([
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'name' => $request->input('name'),
            'agreed' => $request->input('agreed'),
        ]);

        dd($user);

        return redirect()->route('login.get');
    }

}
