@if ($feeds->isNotEmpty())
    <ol class="statuses">
        @foreach($feeds as $status)
            @include('statuses._status', ['user' => $status->user])
        @endforeach

        {!! $feeds !!}
    </ol>
@endif
