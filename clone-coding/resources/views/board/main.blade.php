@extends('board.layout')

@section('link')
<link rel="stylesheet" href="/css/main.css">
@endsection

@section('title','main')

@section('body')
    <header>
        <div class="header_title">우리가 시간이 없지, 세상이 안 궁금하냐!</div>
        <hr class="main_hr">
        <div class="header_flex">
            <div class="header_intro">
                <div class="header_mg1">
                    <div class="header_mg2"><img class="header_a" src="/img/rocket.png" alt="" width="15" height="15">지금 구독하면 <strong>내일 아침</strong>에 읽을 수 있어요.</div>
                    <div class="header_mg2"><img class="header_a" src="/img/star.png" alt="" width="15" height="15">지금 <strong>609,846명</strong>이 뉴닉을 읽고 있어요.</div>
                </div>
                <div class="header_mg1">
                    <div class="header_mg2">세상 돌아가는 소식, 알고는 싶지만 신문 볼 새 없이 바쁜 게 우리 탓은 아니잖아요!</div>
                    <div>월/화/수/목/금 아침마다 세상 돌아가는 소식을 메일로 받아보세요.</div>
                </div>
                <form action="#" method="">
                    <input class="form_input" type="text" name="email" id="email" placeholder="이메일 주소">
                    <br>
                    <input class="form_input"  type="text" name="name" id="name" placeholder="닉네임">
                    <br>
                    <label class="agreedchk" for="agreed"><input class="form_chk" type="checkbox" name="agreed" id="agreed"><span class="underline">개인정보 수집•이용</span>에 동의합니다</label>
                    <br>
                    <label class="agreedchk" for="agreed1"><input class="form_chk" type="checkbox" name="agreed1" id="agreed1"><span class="underline">광고성 정보 수신</span>에 동의합니다</label>
                    <br>
                    <div class="btn_mg">
                        <button class="read_btn" type="button">뉴스레터 무료로 구독하기</button>
                        <a class="down_a" href="#">
                            <div class="down_div">앱 다운로드하기</div>
                            <img class="down_img" src="/img/arrow.png" alt="" width="35" height="25">
                        </a>
                    </div>
                </form>
            </div>
            <div class="intro_img">
                <img src="/img/title.png" alt="" width="500" height="600">
            </div>
        </div>
    </header>
    <body>
        <div class="menu_bar">
            <hr class="main_hr">
            <ul class="body_ul">
                <li>전체</li>
                <li><img src="#" alt="">정치</li>
                <li><img src="#" alt="">경제</li>
                <li><img src="#" alt="">세계</li>
                <li><img src="#" alt="">테크</li>
                <li><img src="#" alt="">노동</li>
                <li><img src="#" alt="">환경</li>
                <li><img src="#" alt="">인권</li>
                <li><img src="#" alt="">사회</li>
                <li><img src="#" alt="">문화</li>
                <li><img src="#" alt="">라이프</li>
            </ul>
            <hr class="main_hr">
        </div>
        <div class="board">
            <div class="board_post">
                <img class="post_img" src="/img/news.jpeg" alt="">
                <div class="post_text">
                    <div class="post_title">안녕 스웨덴, 나토는 처음이지?</div>
                    <div class="post_font ib">2024/02/39</div>
                    <div class="post_font">세계</div>
                </div>
            </div>
        </div>
        <button>더보기</button>
    </body>
    <footer>
        <hr>
        <div></div>
        <hr>
        <div>더 편하게 보고싶다면? 뉴닉 앱에서 만나요!<img src="/img/arrow.png" alt=""></div>
        <hr>
        <div></div>
        <hr>
        <div>
            <div>우리가 시간이 없지, 세상이 안 궁금하냐! 뉴닉탄생기<img src="/img/star.png" alt="" width="15" height="15"></div>
            <img src="/img/arrow.png" alt="">
        </div>
        <hr>
        <div>
            <div>퀴어 프렌들리한 팀을 위한 뉴닉 레인보우 가이드<img src="/img/from.png" alt="" width="15" height="15"></div>
            <img src="/img/arrow.png" alt="">
        </div>
        <hr>
        <div>
            <div>3월 8일에 업데이트된 뉴닉의 여성용어 가이드<img src="/img/toast.png" alt="" width="15" height="15"><img src="/img/rose.png" alt="" width="15" height="15"></div>
            <img src="/img/arrow.png" alt="">
        </div>
    </footer>
@endsection