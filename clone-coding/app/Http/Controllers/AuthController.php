<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function loginget() {

        return view('/login');
    }

    public function loginpost(Request $request) {

        $user = $request->all();

        $db_id = User::where('email',$request->email)->first();
        $db_pw = User::where('password',$request->password)->first();

        if(!$db_id || !$db_pw) {
            $errorMsg = '아이디와 비밀번호를 확인해주세요.';
            return redirect('login')->with($errorMsg);
        }

        Auth::login($user);
        if(Auth::check()) {
            session($user->only('id'));
        } else {
            $errorMsg = '인증 오류가 났습니다.';
            return redirect('login')->with($errorMsg);
        }

        return redirect()->route('board.main');
    }
}
