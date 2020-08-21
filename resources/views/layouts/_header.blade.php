<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a href="{{ route('home') }}" class="navbar-brand">Weibo App</a>
    <ul class="navbar-nav justify-content-end">
      @if(Auth::check())
        <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">users list</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">person center</a>
            <a href="{{ route('users.edit', Auth::id()) }}" class="dropdown-item">update info</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class="btn btn-danger btn-block">logout</button>
              </form>
            </a>
          </div>
        </li>
      @else
        <li class="nav-item"><a href="{{ route('help') }}" class="nav-link">帮助</a></li>
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">登录</a></li>
      @endif
    </ul>
  </div>
</nav>
