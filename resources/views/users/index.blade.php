@extends('layouts.default')
@section('title', 'all users')
@section('content')
  <div class="col-md-8 offset-md-2">
    <h2 class="md-4 text-center">All users</h2>
    <div class="list-group list-group-flush">
      @foreach($users as $user)
        @include('users._user')
      @endforeach
    </div>

    <div class="mt-3">
      {!! $users->render() !!}
    </div>
  </div>
@stop
