<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container">
    <a href="{{ route('home') }}" class="navbar-brand">Home</a>
    <ul class="navbar-nav justify-content-end">
      @if (Auth::check())
        <li class="nav-item"><a href="#" class="nav-link">users</a></li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
             aria-haspopup="true" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a href="{{ route('users.show', Auth::user()) }}" class="dropdown-item">personal</a>
            <a href="#" class="dropdown-item">edit</a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item" id="logout">
              <form action="{{ route('logout') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button class="btn btn-danger btn-block" name="button">logout</button>
              </form>
            </a>
          </div>
        </li>
      @else
        <li class="nav-item"><a href="{{ route('help') }}" class="nav-link">帮助</a></li>
        <li class="nav-item"><a href="#" class="nav-link">登录</a></li>
      @endif
    </ul>
  </div>
</nav>
