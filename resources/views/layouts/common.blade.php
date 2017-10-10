<DOCTYPE HTML>
<html lang="ja">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
@yield('head')
</head>
<body>
@yield('header')
<div class="contents">
    <div class="main">
        @yield('content')
    </div>
    <div class="sub">
        @yield('sub')
        @yield('pageSub')
    </div>
</div>
@yield('footer')
</body>
</html>