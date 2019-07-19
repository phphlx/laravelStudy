@extends('layouts.default')

@section('title', '主页')

@section('content')
    <div class="jumbotron">
        <h1>hello laravel</h1>
        <p class="lead">
            你现在所看到的是 <a href="https://learnku.com/courses/laravel-essential-training/5.5">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>come from here</p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">register now</a>
        </p>
    </div>
@endsection