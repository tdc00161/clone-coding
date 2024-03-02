<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/search.css">
    <script src="/js/search.js" defer></script>
    <title>search</title>
</head>
<body>
    <div class="search_container">
        <form action="#" method="post">
            @csrf
            <div class="form_search">
                <a href="{{route('main')}}"><img class="search_img" src="/img/arrow(left).png" width="10" height="30"></a>
                <input class="search_text" type="text" name="search" id="search"placeholder="고슴아 이게 궁금해.(인물, 이슈)" onkeyup="enterkeySearch()">
            </div>
        </form>
        <div class="keyword">고슴이 추천 키워드</div>
        <div>
            <div class="keyword_f">이재명</div>
            <div class="keyword_f">경제</div>
            <div class="keyword_f">러시아</div>
            <div class="keyword_f">인도</div>
            <div class="keyword_f">방송통신위원회</div>
        </div>
        {{-- <button type="button" id="postbtn">버튼</button>
        <div id="post" style="display: none">
            <div class="content">안녕</div>
        </div> --}}
    </div>
</body>
</html>