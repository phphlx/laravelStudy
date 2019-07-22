@extends('layouts.default')

@section('title', '登录')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>login</h5>
            </div>

            <div class="panel-body">
                @include('shared._errors')

                <form action="{{ route('login') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password">password: (<a href="{{ route('password.request') }}">forgot</a>)</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label><input type="checkbox" name="remember" value="">remember</label>
                    </div>

                    <button type="submit" class="btn btn-primary">login</button>
                </form>
                <hr>

                <p>no accout <a href="{{ route('signup') }}">register now!</a></p>
            </div>
        </div>
    </div>
@endsection