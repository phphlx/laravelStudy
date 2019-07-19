@extends('layouts.default')
@section('title', 'register')
@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>register</h5>
            </div>
            <div class="panel-body">
                @include('shared._errors')

                <form action="{{ route('users.store') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">name:</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="email">email:</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" name="email">
                    </div>

                    <div class="form-group">
                        <label for="password">password:</label>
                        <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">repassword:</label>
                        <input type="password" name="password_confirmation" value="{{ old('password_confirmation')
                        }}" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">register</button>
                </form>
            </div>
        </div>

    </div>
@endsection