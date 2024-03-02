@extends('board.layout')

@section('link')
<link rel="stylesheet" href="/css/main.css">
<script src="/js/main.js" defer></script>
@endsection

@section('title','main')

@section('body')
    @guest
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
                    <form action="{{route('news.post')}}" method="post">
                        @csrf
                        <input class="form_input" type="text" name="email" id="email" placeholder="이메일 주소">
                        <br>
                        <input class="form_input"  type="text" name="name" id="name" placeholder="닉네임">
                        <br>
                        <input class="form_chk" type="checkbox" name="person" value="1"><button type="button" class="underline">개인정보 수집•이용</button><div class="agreedchk">에 동의합니다</div>
                        <div class="person_modal" style="display:none">
                            <div>
                                <div>개인정보 수집•이용 동의</div>
                                <div>뉴닉은 뉴스레터 발송을 위해 최소한의 개인정보를 수집하고 이용합니다.</div>
                                <br>
                                <ul>
                                    <li>수집•이용 목적</li>
                                    <li>수집•이용 항목</li>
                                    <li>수집•이용 기간</li>
                                </ul>
                                <ul>
                                    <li>뉴닉 뉴스레터 발송</li>
                                    <li>이메일주소</li>
                                    <li>서비스 종료 시 또는 뉴스레터 구독 해지 시 즉시 파기</li>
                                </ul>
                                <br>
                                <div>동의를 거부하는 경우에 대한 안내</div>
                                <div>동의하지 않을 경우 개인정보 수집•이용 동의를 거부할 권리가 있습니다. 거부할 경우 뉴스레터 구독 서비스를 이용할 수 없습니다.</div>
                            </div>
                            <div>
                                <div>개인정보 처리 위탁•수탁</div>
                                <div>회사는 서비스 제공 및 향상을 위해서 아래와 같이 개인정보를 위탁하고 있으며, 관계 법령에 따라 위탁 계약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다.</div>
                                <br>
                                <ul>
                                    <li>수탁업체</li>
                                    <li>수탁업무 내용</li>
                                    <li>개인정보의 보유 및 이용기간</li>
                                </ul>
                                <ul>
                                    <li>스티비</li>
                                    <li>뉴스레터 또는 광고가 포함된 뉴스레터 발송, 서비스 이용 통계 및 분석</li>
                                    <li>구독해지 시 또는 위탁계약 종료 시</li>
                                </ul>
                                <ul>
                                    <li>AWS</li>
                                    <li>개인정보가 저장된 국내 클라우드 서버 운영 및 관리</li>
                                    <li>구독해지 시 또는 위탁계약 종료 시</li>
                                </ul>
                            </div>
                        </div>
                        <br>
                        <label class="agreedchk" for="promotion"><input class="form_chk" type="checkbox" name="promotion" id="promotion" value="1"><span class="underline">광고성 정보 수신</span>에 동의합니다</label>
                        <br>
                        <div class="btn_mg">
                            <button class="read_btn" type="submit">뉴스레터 무료로 구독하기</button>
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
    @endguest
    <body>
        <div class="menu_bar">
            <hr class="main_hr">
            <ul class="body_ul">
                <li>전체</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/police.png" alt="" width="18" height="18">정치</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/money.png" alt="" width="18" height="18">경제</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/world.png" alt="" width="18" height="18">세계</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/tech.png" alt="" width="18" height="18">테크</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/work.png" alt="" width="18" height="18">노동</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/eco.png" alt="" width="18" height="18">환경</li>
                <li class="li_flex"><img class="menu_bar_mg" src="/img/people.png" alt="" width="18" height="18">인권</li>
                <li class="li_flex"><img class="menu_bar_mg" src="#" alt="">사회</li>
                <li class="li_flex"><img class="menu_bar_mg" src="#" alt="">문화</li>
                <li class="li_flex"><img class="menu_bar_mg" src="#" alt="">라이프</li>
            </ul>
            <hr class="main_hr">
        </div>
        <div class="total_board">
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
            <button class="plus_btn">더보기</button>
        </div>
    </body>
    <footer>
        <div>
            <hr class="main_hr1">
            <div class="bg"><img class="title_img" src="/img/title.png" alt="" width="120" width="180"></div>
            <hr class="main_hr">
            <a href="#">
                <div class="app_link">
                    <div>더 편하게 보고싶다면? 뉴닉 앱에서 만나요!</div>
                    <img class="link_mg" src="/img/arrow2.png" alt="" width="55" height="30">
                </div>
            </a>
            <hr class="main_hr1">
        </div>
        <div class="interval"></div>
        <hr class="main_hr">
        <a href="#">
            <div class="footer_link">
                <div>우리가 시간이 없지, 세상이 안 궁금하냐! 뉴닉탄생기<img class="link_mg" src="/img/star.png" alt="" width="15" height="15"></div>
                <img src="/img/arrow2.png" alt="" width="55" height="30">
            </div>
        </a>
        <hr class="main_hr">
        <a href="#">
            <div class="footer_link">
                <div>퀴어 프렌들리한 팀을 위한 뉴닉 레인보우 가이드<img class="link_mg" src="/img/from.png" alt="" width="15" height="15"></div>
                <img src="/img/arrow2.png" alt="" width="55" height="30">
            </div>
        </a>
        <hr class="main_hr">
        <a href="#">
            <div class="footer_link">
                <div>3월 8일에 업데이트된 뉴닉의 여성용어 가이드<img class="link_mg" src="/img/toast.png" alt="" width="15" height="15"><img src="/img/rose.png" alt="" width="15" height="15"></div>
                <img src="/img/arrow2.png" alt="" width="55" height="30">
            </div>
        </a>
    </footer>
@endsection