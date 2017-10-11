<DOCTYPE HTML>
<html lang="ja">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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