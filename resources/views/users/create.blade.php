@extends('layouts.default')
@section('title', '注册')

@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card">
      <div class="card-header">
        <h5>register</h5>
      </div>
      <div class="card-body">
        @include('shared._errors')

        <form action="{{ route('users.store') }}" method="POST">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control" value="{{ old('name') }}">
          </div>

          <div class="form-group">
            <label for="email">email:</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">password:</label>
            <input type="password" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label for="password_confirmation">password_confirm</label>
            <input type="password" name="password_confirmation" class="form-control">
          </div>

          <button class="btn btn-primary">register</button>
        </form>
      </div>
    </div>
  </div>
@endsection
