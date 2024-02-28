<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/auth.css">
    <link rel="stylesheet" href="/js/auth.js" defer>
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
                <input class="login_input" type="text" name="email" id="email" placeholder="이메일">
                <br>
                <br>
                <input class="login_input" type="password" name="password" id="password" placeholder="비밀번호">
                <a class="password_search">비밀번호를 잊으셨나요?</a>
                <button class="login_button">로그인</button>
            </form>
            <a class="registration_btn" href="{{route('signup.get')}}">회원가입</a>
        </div>
    </div>
</body>
</html>