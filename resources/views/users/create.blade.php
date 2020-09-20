@extends('layouts.default')
@section('title', 'register')

@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>register</h5>
      </div>
      <div class="card-body">
        <form action="{{ route('users.store') }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">name:</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" name="password">
          </div>

          <div class="form-group">
            <label for="password_confirmation">repassword:</label>
            <input type="password" name="password_confirmation" class="form-control">
          </div>

          <button class="btn btn-primary">register</button>
        </form>
      </div>
    </div>
  </div>
@endsection
