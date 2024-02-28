<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <div>
        <h2>NEWNEEK</h2>
            <a href="#">
                <img src="/img/google.png" alt="">
                <div>구글로 시작하기</div>
            </a>
            <hr>
            <form action="{{route('login.post')}}" method="post">
                @csrf
                <input type="text" name="email" id="email" placeholder="이메일">
                <input type="password" name="password" id="password" placeholder="비밀번호">
                <div>비밀번호를 잊으셨나요?</div>
                <button>로그인</button>
            </form>
            <a href="#">회원가입</a>
    </div>
</body>
</html>