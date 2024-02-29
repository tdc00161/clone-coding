<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/auth.css">
    <script src="/js/auth.js" defer></script>
    <title>signup</title>
</head>
<body>
    <div class="login_background">
        <div class="login_container">
            <h2 class="login_title">NEWNEEK</h2>
            <form action="{{route('signup.post')}}" method="post" id="form">
                @csrf
                <div class="mg">
                    <input class="login_input" type="text" name="email" id="email" placeholder="이메일">
                    @if($errors->has('email'))
                    <span id="emailE" class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="mg">
                    <input class="login_input" type="password" name="password" id="password" placeholder="비밀번호(한글,영문,특수문자 포함 8자 이상)">
                    @if($errors->has('password'))
                    <span id="passwordE" class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <div class="mg">
                    <input class="login_input" type="password" name="passwordchk" id="passwordchk" placeholder="비밀번호 확인(한글,영문,특수문자 포함 8자 이상)">
                    @if($errors->has('passwordchk'))
                    <span id="passwordchkE" class="text-danger">{{$errors->first('passwordchk')}}</span>
                    @endif
                </div>
                <div class="mg">
                    <input class="login_input" type="text" name="name" id="name" placeholder="이름">
                    @if($errors->has('name'))
                    <span id="nameE" class="text-danger">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="mg">
                <label class="signup_label" for="agreed"><input class="signup_input" type="checkbox" name="agreed" value="1" id="agreed">만 14세 이상 가입 동의(필수)</label>
                @if($errors->has('agreed'))
                <span id="agreedE" class="text-danger">{{$errors->first('agreed')}}</span>
                @endif
                </div>
                <button class="sign_button" id="sign_btn">가입하기</button>
            </form>
        </div>
    </div>
</body>
</html>