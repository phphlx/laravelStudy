<li id="status-{{ $status->id }}">
    <a href="{{ route('users.show', $user) }}">
        <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    </a>
    <span class="user">
        <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
    </span>
    <span class="timestamp">
        {{ $status->created_at->diffForHumans() }}
    </span>
    <span class="content">{{ $status->content }}</span>
    @can('destroy', $status)
        <form action="{{ route('statuses.destroy', $status) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger btn-sm status-delete-btn">delete</button>
        </form>
    @endcan
</li>