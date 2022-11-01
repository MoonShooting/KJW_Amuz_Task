@extends('layout')
@section('content')

    <h3>글목록 조회</h3>
    <div>
        <ul class="post_list">
            @foreach ($posts as $post)
            <li class="post_list_item"><a href="{{ route("post.show"), $posts->id }}">{{ $posts->b_title }}</a></li>
            @endforeach
        </ul>
    </div>
    <div>
        <a href="{{ route('post.create') }}" class="but">글쓰기</a>
    </div>
@stop
