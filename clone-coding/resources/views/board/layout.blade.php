<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/layout.css">
    <script src="/js/common.js" defer></script>
    @yield('link','')
    <title>@yield('title','layout')</title>
</head>
<body>
    <div class="layout_title"><a href="{{route('main')}}">NEWNEEK</a></div>
    <div class="layout_img_btn">
        <a href="{{route('search')}}"><div class="layout_img"><img src="/img/search.png" alt="" width="25" height="25"></div></a>
        @guest
        <a href="{{route('login.get')}}"><div class="layout_img"><img src="/img/person.png" alt="" width="25" height="25"></div></a>
        @endguest
        @auth
        <button class="login_img" type="button"><div class="layout_img"><img src="/img/person.png" alt="" width="25" height="25"></div></button>
        @endauth
        <div id="user" style="display: none">
            <div class="usermenu">마이페이지</div>
            <div>주문내역</div>
            <div>프로필 설정</div>
            <div>고객센터</div>
            <div>로그아웃</div>
        </div>
    </div>
    <hr class="layout_hr">
    @yield('body')
    <hr class="layout_hr">
    <div class="layout_content">오늘까지 <strong>588회</strong> 뉴스레터를 발행했고 <strong>609,846명</strong>이 구독했어요!</div>
    <div style="display: none">뉴스레터 구독하기   뉴스레터 구독하기   뉴스레터 구독하기    뉴스레터 구독하기</div>
    <hr class="layout_hr">
    <div class="layout_footer">
        <div class="footer_title">NEWNEEK</div>
        <div class="footer_grid">
            <div class="footer_flex">
                <a class="footer_a" href="#">뉴닉 커뮤니티</a>
                <a class="footer_a" href="#">인스타그램</a>
                <a class="footer_a" href="#">네이버 블로그</a>
            </div>
            <div class="footer_flex">
                <a class="footer_a" href="#">모두와 함께, 뉴닉</a>
                <a class="footer_a" href="#">물물교환</a>
                <a class="footer_a" href="#">여성의 날</a>
                <a class="footer_a" href="#">2020 총선</a>
            </div>
            <div class="footer_flex">
                <a class="footer_a" href="#">서비스이용약관</a>
                <a class="footer_a" href="#">개인정보처리방침</a>
                <a class="footer_a" href="#">제휴 문의</a>
                <a class="footer_a" href="#">고객센터</a>
            </div>
        </div>
    </div>
    <div class="footer_pd">
        <div class="footer_company">㈜뉴닉 / 대표: 홍길동 / 사업자등록번호: 632-66-25364 / 대표전화: 02-1588-1004 / 통신판매번호: 2024-서울뉴닉-0229 / 개인정보보호책임자: 홍길동 / 담당자메일주소: admin@newneek.com</div>
        <div class="footer_company">서울특별시 서초구 뉴닉레터로 24, 2층</div>
        <div class="footer_company">근무시간이 일정하지 않아 전화대신 고객센터를 이용해주세요!</div>
    </div>
</body>
</html>