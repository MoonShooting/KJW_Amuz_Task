@extends('layout')
@section('content')
<section>
    <h3>글쓰기</h3>
    <div>
        <form method="POST" action="{{  route('posts.store') }}">
            <input type="hidden" name="token" value="{{ csrf_token() }}">
            <div>
                <label for="title">글제목</label>
                <input class="form_tag" type="text" name="title" value="">
            </div>
            <div>
                <label for="content">내용</label>
                <textarea class="form_tag" type="text" name="content" placeholder="내용을 작성하세요."></textarea>
            </div>
            </div>
            <div>
                <input class="btn" type="submit" value="작성하기">
            </div>
        </form>
    </div>

</section>
@endsection
{{-- @if(serrors->any())
    <div class="er" role="alert">
        <span class="e_show" aria-hidden="true"></span>
        <span class="e_show">Error: </span>
        @foreach ($errors->all() as $message)
            {{ $message }}            
        @endforeach
    </div>
@endif --}}