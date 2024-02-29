<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SignupValidation
{
    public function handle(Request $request, Closure $next)
    {

        $userInfo = $request->only('email','password','name','agreed');

        $validation = Validator::make($userInfo,[
            'email' => 'required|min:1|max:50|unique:users|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!@$%^*]).*$/',
            'passwordchk' => 'confirmed',
            'name' => 'required|min:2|max:50|regex:/^[a-zA-z가-힣]+$/',
            'agreed' => 'required|accepted',
        ], [
            'email.required' => '이메일은 필수 입력 항목입니다.',
            'email.email' => '이메일 형식이 올바르지 않습니다',
            'email.max' => '최대 50자까지 입력 가능합니다.',
            'email.unique' => '중복된 이메일입니다.',
            'password.required' => '비밀번호는 필수 입력 항목입니다.',
            'password.min' => '비밀번호는 최소 8자 이상 입력 해야합니다.',
            'password.regex' => '비밀번호는 한글, 영문 대소문자, 숫자, 특수문자가 포함해야 합니다.',
            'passwordchk.confirmed' => '비밀번호와 동일하지 않습니다.',
            'name.required' => '이름은 필수 입력 항목입니다.',
            'name.regex' => '이름에는 영문자나 한글만 사용할 수 있습니다.',
            'agreed.required' => '이용약관 동의는 필수 입력 항목입니다.',
        ]);

        if($validation->fails()) {

            return back()->withErrors($validation)->withInput();
        }

        return $next($request);
    }
}

// 422: 서버가 요청을 이해하고 요청 문법도 올바르지만 요청된 지시를 따를 수 없음