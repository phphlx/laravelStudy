<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}

    <textarea name="content" id="" rows="3" class="form-control">
        {{ old('content') }}
    </textarea>

    <button type="submit" class="btn btn-primary pull-right">submit</button>
</form>
