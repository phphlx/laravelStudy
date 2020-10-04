<form action="{{ route('statuses.store') }}" method="POST">
  @include('shared._errors')
  {{ csrf_field() }}

  <textarea name="content" rows="3" class="form-control">
    {{ old('content') }}
  </textarea>
  <div class="text-right">
    <button class="btn btn-sm btn-primary mt-3">publish</button>
  </div>
</form>
