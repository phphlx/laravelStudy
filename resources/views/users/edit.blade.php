@extends('layouts.default')
@section('title', $user->name)

@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>更新个人资料</h5>
      </div>

      <div class="card-body">
        @include('shared._errors')

        <div class="gravatar_edit">
          <a href="http://gravatar.com/emails" target="_blank">
            <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
          </a>
        </div>

        <form action="{{ route('users.update', $user) }}" method="POST">
          {{ csrf_field() }}
          {{ method_field('PATCH') }}

          <div class="form-group">
            <label for="name">name:</label>
            <input name="name" class="form-control" value="{{ $user->name }}">
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
          </div>

          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" name="password">
          </div>

          <div class="form-group">
            <label for="password_confirmation">repassword:</label>
            <input type="password" name="password_confirmation" class="form-control">
          </div>

          <button class="btn btn-primary">update</button>
        </form>
      </div>
    </div>
  </div>
@endsection
