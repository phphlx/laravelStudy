@extends('layouts.default')
@section('title', 'login')

@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>login</h5>
      </div>

      <div class="card-body">
        @include('shared._errors')

        <form action="{{ route('login') }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">password (<a href="{{ route('password.request') }}">forgot</a>):</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="remember" id="exampleCheck1">
              <label for="exampleCheck1" class="form-check-label">remember</label>
            </div>
          </div>

          <button class="btn btn-primary">login</button>
        </form>

        <hr>

        <p>还没账号? <a href="{{ route('signup') }}">register now</a></p>
      </div>
    </div>
  </div>
@endsection