<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}

    <textarea name="content" id="#" rows="3" placeholder="聊聊新鲜事">
        {{ old('content') }}
    </textarea>
    <button class="btn btn-primary pull-right" type="submit">
        发布
    </button>
</form>