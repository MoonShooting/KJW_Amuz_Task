<!DOCTYPE html>
<html lang="ko">
<head>
    <title>@yield('title', 'Home Page')</title>
</head>
<body>
    
    <!-- nav -->
    <div class="nav">
        <ul>
            <li><a href="/posts.create">게시판 생성</a></li>
            <li><a href="/posts.list">게시판 목록</a></li>
            <li><a href="/">홈으로</a></li>
        </ul>
    </div>

        @yield('content')
    
</body>
</html>