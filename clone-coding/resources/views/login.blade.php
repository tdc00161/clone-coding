<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/auth.css">
    <script src="/js/auth.js" defer></script>
    <title>login</title>
</head>
<body>
    <div class="login_background">
        <div class="login_container">
            <h2 class="login_title">NEWNEEK</h2>
            <div class="box">
                <a href="#" class="google_tag">
                    <img src="/img/google.png" alt="" width="20" height="20">
                    <div class="a_div">구글로 시작하기</div>
                </a>
            </div>
            <hr class="hr">
            <form action="#" method="post">
                @csrf
                <div class="mg">
                    <input class="login_input" type="text" name="email" id="email" placeholder="이메일">
                    @if($errors->has('email'))
                    <span id="emailE" class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="mg">
                    <input class="login_input" type="password" name="password" id="password" placeholder="비밀번호">
                    @if($errors->has('password'))
                    <span id="passwordE" class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <a href="{{route('forget.get')}}" class="password_search">비밀번호를 잊으셨나요?</a>
                <button class="login_button">로그인</button>
            </form>
            <a class="registration_btn" href="{{route('signup.get')}}">회원가입</a>
        </div>
    </div>
</body>
</html>