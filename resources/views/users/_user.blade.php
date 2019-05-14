<li>
    <img src="{{ $user->gravatar() }}" alt="{{ $user->name }}" class="gravatar">
    <a href="{{ route('users.show', $user->id) }}" class="username">{{ $user->name }}</a>

    @can('delete', $user)
        <form action="{{ route('users.destroy', $user->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('delete') }}
            <button class="btn btn-danger btn-sm delete-btn" type="submit">删除</button>
        </form>
    @endcan
</li>