@extends('layouts.default')

@section('title', '主页')

@section('content')
    @if (\Illuminate\Support\Facades\Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
                <h3>wei bo list</h3>
                @include('shared._feed')
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info', ['user' => \Illuminate\Support\Facades\Auth::user()])
                </section>
                <section class="stats">
                    @include('shared._stats', ['user' => \Illuminate\Support\Facades\Auth::user()])
                </section>
            </aside>
        </div>
    @else
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
    @endif
@endsection