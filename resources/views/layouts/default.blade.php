<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Weibo') - Laravel 新手入门</title>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container">
    <a href="/" class="navbar-brand">Home</a>
    <ul class="navbar-nav justify-content-end">
      <li class="nav-item"><a href="/help" class="nav-link">帮助</a></li>
      <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  @yield('content')
</div>
</body>
</html>
