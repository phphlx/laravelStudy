@extends('layouts.default')
@section('title', '首页')
@section('content')
    <div class="jumbotron">
        <h1>Hello Laravel</h1>
        <p class="lead">
            你现在看到的是<a href="https://learnku.com/courses/laravel-essential-training/5.5">Laravel 入门教程</a> 的示例项目主页。
        </p>
        <p>一切从这里开始</p>
        <p>
            <a href="{{ route('signup') }}" class="btn btn-lg btn-success" role="button">现在注册</a>
        </p>
    </div>
@stop