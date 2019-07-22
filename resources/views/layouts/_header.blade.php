<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="col-md-offset-1 col-md-10">
            <a href="{{ route('home') }}" id="logo">Sample App</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                    @if (\Illuminate\Support\Facades\Auth::check())
                        <li><a href="{{ route('users.index') }}">users list</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ \Illuminate\Support\Facades\Auth::user()->name }} <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ route('users.show', \Illuminate\Support\Facades\Auth::user())
                                }}">personal center</a></li>
                                <li><a href="{{ route('users.edit', \Illuminate\Support\Facades\Auth::user()) }}">profile
                                        edit</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#" id="logout">
                                        <form action="{{ route('logout') }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-block btn-danger" type="submit"
                                                    name="button">logout</button>
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('help') }}">help</a></li>
                        <li><a href="{{ route('login') }}">login</a></li>
                    @endif
                </ul>
            </nav>
        </div>
    </div>
</header>