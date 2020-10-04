<li class="mt-4 media mb-4">
  <a href="{{ route('users.show', $user) }}">
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="mr-3 gravatar">
  </a>
  <div class="media-body">
    <h5 class="mt-0 mb-1">
      {{ $user->name }}
      <small>/ {{ $status->created_at->diffForHumans() }}</small>
    </h5>
    {{ $status->content }}
  </div>

  @can('destroy', $status)
    <form action="{{ route('statuses.destroy', $status) }}" method="POST" onsubmit="return confirm('确定删除吗?');">
      {{ csrf_field() }}
      {{ method_field('DELETE') }}

      <button class="btn btn-sm btn-danger">delete</button>
    </form>
  @endcan
</li>
