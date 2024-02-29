<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class LoginValidation
{
    public function handle(Request $request, Closure $next)
    {

        $userInfo = $request->only('email','password');

        Log::debug("검색", [$userInfo]);

        $validation = Validator::make($userInfo,[
            'email' => 'required|min:1|max:50|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@$%^*]).*$/',
        ], [
            'email.required' => '이메일은 필수 입력 항목입니다.',
            'email.email' => '이메일 형식이 올바르지 않습니다',
            'email.max' => '최대 50자까지 입력 가능합니다.',
            'password.required' => '비밀번호는 필수 입력 항목입니다.',
            'password.min' => '비밀번호는 최소 8자 이상 입력 해야합니다.',
            'password.regex' => '비밀번호는 한글, 영문 대소문자, 숫자, 특수문자가 포함해야 합니다.',
        ]);

        Log::debug("검증과정",[$userInfo]);

        if($validation->fails()) {

            return back()->withErrors($validation)->withInput();
        }

        Log::debug("검증완료",[$userInfo]);

        return $next($request);
    }
}
