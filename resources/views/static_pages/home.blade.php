@extends('layouts.default')

@section('content')
  <div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
      现在所看到的是 <a href="#">Laravel 入门教程</a> 的示例工程
    </p>
    <p>一切从这里开始</p>
    <p>
      <a href="{{ route('signup') }}" class="btn btn-lg btn-success">注册</a>
    </p>
  </div>
@endsection
