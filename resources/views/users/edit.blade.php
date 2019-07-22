@extends('layouts.default')

@section('title', 'edit')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>edit</h4>
            </div>

            <div class="panel-body">
                @include('shared._errors')

                <div class="gravatar_edit">
                    <a href="http://gravatar.com/emails" target="_blank">
                        <img src="{{ $user->gravatar(200) }}" alt="{{ $user->name }}">
                    </a>
                </div>

                <form action="{{ route('users.update', $user) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}

                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" value="{{ $user->name }}" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control" disabled="">
                    </div>

                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" value="{{ old('password') }}" class="form-control" name="password">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">repassword:</label>
                        <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation"
                               class="form-control">
                    </div>

                    <button class="btn btn-primary" type="submit">update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
