<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/common.css">
    <title>Document</title>
</head>
<body>
    <form action="{{route('post.create')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="category">카테고리</label>
        <select name="category">
            <option value="none">선택하세요</option>
            <option value="0">정치</option>
            <option value="1">경제</option>
            <option value="2">세계</option>
            <option value="3">테크</option>
            <option value="4">노동</option>
            <option value="5">환경</option>
            <option value="6">인권</option>
            <option value="7">사회</option>
            <option value="8">문화</option>
            <option value="9">라이프</option>
        </select>
        <br>
        <label for="title">제목<input type="text" name="title"></label>
        <br>
        <label for="content">내용<textarea name="content" id="" cols="30" rows="10"></textarea></label>
        <br>
        <input type="file" name="img">
        <br>
        <button>작성</button>
    </form>
</body>
</html>