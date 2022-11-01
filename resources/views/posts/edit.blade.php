@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>board post update page</title>
</head>
<body>
    <h3>글 수정하기</h3>
    <div>
        <form method="POST" action="{{  route('posts.update', $posts->id) }}">
            <div>
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <input type="hidden" name="method" value="put">
            </div>
            <div>
                <label for="title">글제목</label>
                <input class="form_tag" type="text" name="title" value="{{ $posts->b_title }}">
            </div>
            <div>
                <label for="content">내용</label>
                <textarea class="form_tag" type="text" name="content">{{ $posts->b_content }}</textarea>
            </div>
            <div>
                <a href="{{ route('posts.edit') }}" class="but">수정하기</a>
                <a href="{{ route('posts.delete') }}" class="but">삭제하기</a>
            </div>
        </form>
     </div>
@stop
</body>
</html>