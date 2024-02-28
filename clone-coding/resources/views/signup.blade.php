<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/auth.css">
    <link rel="stylesheet" href="/js/auth.js" defer>
    <title>signup</title>
</head>
<body>
    <div class="login_background">
        <div class="login_container">
            <h2 class="login_title">NEWNEEK</h2>
            <form action="{{route('signup.post')}}" method="post" id=form>
                @csrf
                <input class="login_input mg" type="text" name="email" id="email" placeholder="이메일">
                <span id="emailE" class="emailE"></span>
                <br>
                <input class="login_input mg" type="password" name="password" id="password" placeholder="비밀번호(한글,영문,특수문자 포함 8자 이상)">
                <br>
                <input class="login_input mg" type="password" name="passwordchk" id="passwordchk" placeholder="비밀번호 확인(한글,영문,특수문자 포함 8자 이상)">
                <br>
                <input class="login_input mg" type="text" name="name" id="name" placeholder="이름">
                <br>
                <label class="signup_label" for="agreed"><input class="signup_input" type="checkbox" name="agreed" value="1" id="agreed">만 14세 이상 가입 동의(필수)</label>
                <button class="sign_button" id="sign_btn">가입하기</button>
            </form>
        </div>
    </div>
</body>
</html>