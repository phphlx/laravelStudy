@extends('layouts.default')

@section('title', 'reset password')

@section('content')
    <div class="col-md-offset-2 col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                update password
            </div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('password.update') }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        <label for="email" class="control-label col-md-4">email:</label>
                        <div class="col-md-6">
                            <input type="email" name="email" value="{{ $email or old('email') }}" required
                                   autofocus id="email" class="form-control">
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        {{ $errors->first('email') }}
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password" class="control-label col-md-4">password:</label>
                        <div class="col-md-6">
                            <input type="password" name="password" required id="password" class="form-control">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    {{ $errors->first('password') }}
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                        <label for="password-confirm">repassword:</label>
                        <div class="col-md-6">
                            <input type="password" name="password_confirmation" class="form-control"
                                   id="password-confirm" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button class="btn btn-primary" type="submit">submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
