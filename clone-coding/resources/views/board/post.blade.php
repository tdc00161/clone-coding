@extends('board.layout')

@section('link')
<link rel="stylesheet" href="/css/post.css">
@endsection

@section('title','Post')

@section('body')
@foreach ($post as $item)
    <div class="post_header">
        <div class="post_category">{{$item->name}}</div>
        <div class="post_title">{{$item->title}}</div>
        <div class="post_create">{{$date}}</div>
    </div>
    <hr class="post_hr">
<div class="post_body">
    <div class="post_img"><img src="{{asset($item->img)}}" alt="" width="600" height="400"></div>
    @if($item->img = null)
        <img src="/img/news" alt="">
    @endif
    <div>{{$item->content}}</div>
    <div class="post_tag">
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
        <a class="post_tag_a" href="#">#태그</a>
    </div>
    <div class="post_footer">
        <div class="post_likes">
            <img src="#" alt="">
            <div>좋았슴</div>
            <div>{{$item->likes}}</div>
        </div>
        <div>
            <a href="#"><img src="#" alt=""></a>
            <a href="#"><img src="#" alt=""></a>
        </div>
    </div>
    @endforeach
    <hr class="post_hr">
    <form class="newsform" action="{{route('news.post')}}" method="post">
        <div class="newsletter">
            <input class="newsw" type="text" placeholder="이메일 주소">
            <button class="news_btn" type="submit">뉴스레터 구독하기</button>
        </div>
    </form>
    <div class="newsclick">구독할 경우 <button class="click_btn" type="button">개인정보 수집•이용</button>과 <button class="click_btn" type="button">광고성 정보 수신</button>에 동의하게 됩니다.</div>
</div>
@endsection