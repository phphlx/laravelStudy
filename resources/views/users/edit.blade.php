@extends('layouts.default')
@section('title', 'update info')

@section('content')
  <div class="col-md-8 offset-md-2">
    <div class="card">
      <div class="card-header">
        <h5>update person info</h5>
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
            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
          </div>

          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" class="form-control" value="{{ $user->email }}" disabled>
          </div>

          <div class="form-group">
            <label for="password">password:</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label for="password_confirmation">password_confirm:</label>
            <input type="password" class="form-control" name="password_confirmation">
          </div>

          <button class="btn btn-primary">update</button>
        </form>
      </div>
    </div>
  </div>
@endsection
