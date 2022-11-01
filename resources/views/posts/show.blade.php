@extends('layout');
@section('content');
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>board post view page</title>
</head>
<body>
    <h1>{{ $posts->b_title }}</h1>
    <article>
        {{ $posts->b_content }}
    </article>
    <article>
       <a href="<?php echo route('show.show', ['id' =>1]); ?>"></a>       
       {{-- /show/{id}를 ->name('show.show')를 통해 라우터 이름 지정. 클릭 시 해당 id값이 url에 출력되게 된다. --}}
    </article>
    <div>
        <h3>
          <a href="{{ route('posts.edit', $posts->id) }}" class="">글 수정하기</a>  
          <form method="POST" action="{{ route('post.destroy', $post->id) }}">
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <input type="hidden" name="method" value="delete">
            <button class="btn">글 삭제하기</button>
          </form>
          <a href="{{ route('posts.index') }}" class="btn">목록으로</a>
        </h3>
    </div>
</body>
</html>