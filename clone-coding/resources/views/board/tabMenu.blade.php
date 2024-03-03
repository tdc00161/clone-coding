@extends('board.layout');

@section('link')
<link rel="stylesheet" href="/css/main.css">
<script src="/js/tabMenu.js" defer></script>

@endsection

@section('title','tabMenu');

@section('body')
<div class="menu_bar">
    {{-- <hr class="main_hr"> --}}
    <ul class="body_ul tab">
        <li><a href="{{route('main')}}">전체</a></li>
        <li class="li_flex" onclick="openTab(e, tab1)"><img class="menu_bar_mg" src="/img/police.png" alt="" width="18" height="18">정치</li>
        <li class="li_flex" onclick="openTab(e, tab2)"><img class="menu_bar_mg" src="/img/money.png" alt="" width="18" height="18">경제</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/world.png" alt="" width="18" height="18">세계</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/tech.png" alt="" width="18" height="18">테크</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/work.png" alt="" width="18" height="18">노동</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/eco.png" alt="" width="18" height="18">환경</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/people.png" alt="" width="18" height="18">인권</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/together.png" alt="" width="18" height="18">사회</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/film.png" alt="" width="18" height="18">문화</li>
        <li class="li_flex"><img class="menu_bar_mg" src="/img/yoga.png" alt="" width="18" height="18">라이프</li>
    </ul>
    <hr class="main_hr">
</div>
<div class="tab_content-wrapper tab_pd">
    <div id="tab1" class="tab_content">
        <div class="tab_title">
            <img src="/img/police.png" alt="" width="40" height="40">
            <div class="title_b">정치</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($police as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab2" class="tab_content">
        <div class="tab_title">
            <img src="/img/money.png" alt="" width="50" height="50">
            <div class="title_b">경제</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($money as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab3" class="tab_content">
        <div class="tab_title">
            <img src="/img/world.png" alt="" width="50" height="50">
            <div class="title_b">세계</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($world as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab4" class="tab_content">
        <div class="tab_title">
            <img src="/img/tech.png" alt="" width="50" height="50">
            <div class="title_b">테크</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($tech as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab5" class="tab_content">
        <div class="tab_title">
            <img src="/img/work.png" alt="" width="50" height="50">
            <div class="title_b">노동</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($work as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab6" class="tab_content">
        <div class="tab_title">
            <img src="/img/eco.png" alt="" width="50" height="50">
            <div class="title_b">환경</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($eco as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab7" class="tab_content">
        <div class="tab_title">
            <img src="/img/people.png" alt="" width="50" height="50">
            <div class="title_b">인권</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($people as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab8" class="tab_content">
        <div class="tab_title">
            <img src="/img/together.png" alt="" width="50" height="50">
            <div class="title_b">사회</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($together as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab9" class="tab_content">
        <div class="tab_title">
            <img src="/img/film.png" alt="" width="50" height="50">
            <div class="title_b">문화</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($film as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
    <div id="tab10" class="tab_content">
        <div class="tab_title">
            <img src="/img/yoga.png" alt="" width="50" height="50">
            <div class="title_b">라이프</div>
        </div>
        <div class="total_board">
            <div class="board">
                @forelse ($yoga as $item)
                <a href="{{route('post.detail',['id'=>$item->id])}}">
                    <div class="board_post">
                        <img class="post_img" src="{{asset($item->img)}}" alt="">
                        @if($item->img = null)
                            <img src="/img/news.png" alt="">
                        @endif
                        <div class="post_text">
                            <div class="post_title">{{$item->title}}</div>
                            <div class="post_font ib">{{$item->created_at}}</div>
                            <div class="post_font">{{$item->name}}</div>
                        </div>
                    </div>
                </a>
                @empty
                @endforelse
            </div>
            <button class="plus_btn">더보기</button>
        </div>
    </div>
</div>
@endsection