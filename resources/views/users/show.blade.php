@extends('layouts.default')
@section('title', $user->name)

@section('content')
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="col-md-12">
                <div class="col-md-offset-2 col-md-8">
                    <section class="user_info">
                        @include('shared._user_info', ['user' => $user])
                    </section>
                    <section class="stats">
                        @include('shared._stats', ['user' => \Illuminate\Support\Facades\Auth::user()])
                    </section>
                </div>
            </div>

            <div class="col-md-8">
                @if (\Illuminate\Support\Facades\Auth::check())
                    @include('users._follow_form')
                @endif
                @if ($statuses->isNotEmpty())
                    <ol class="statuses">
                        @foreach($statuses as $status)
                            @include('statuses._status')
                        @endforeach
                    </ol>
                    {!! $statuses !!}
                @endif
            </div>
        </div>
    </div>
@endsection
