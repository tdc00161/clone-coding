<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/auth.css">
    <script src="/js/auth.js" defer></script>
    <title>forgetpw</title>
</head>
<body>
    <div class="login_background">
        <div class="forget_container">
            <div class="forget_intro">
                <div class="forget_title">비밀번호찾기</div>
                <div class="forget_div">비밀번호를 재설정할 수 있는 링크를 보내드려요.</div>
            </div>
            <form action="#" method="post">
                @csrf
                <div class="mg">
                    <div class="forget_mg">이메일 주소</div>
                    <input class="forget_input" type="text" name="email" id="email" placeholder="newneeker@newneek.co">
                    @if($errors->has('email'))
                    <span id="emailE" class="text-danger">{{$errors->first('email')}}</span>
                    @endif
                </div>
                <div class="forget_flex">
                    <button class="forget_btn" type="button" id="link_btn">링크발송</button>
                    <div class="sign_cl">
                        <div class="forget_block">이메일 주소가 떠오르지 않으시나요?</div>
                        <a class="forget_a" href="{{route('signup.post')}}">가입하기</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>