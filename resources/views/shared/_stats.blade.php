<div class="stats">
    <a href="{{ route('users.followings', $user->id) }}">
        <strong id="following" class="stat">
            {{ $user->followings()->count() }}
        </strong>
        following
    </a>

    <a href="{{ route('users.followers', $user) }}">
        <strong class="stat" id="followers">
            {{ $user->followers()->count() }}
        </strong>
        followers
    </a>

    <a href="{{ route('users.show', $user) }}">
        <strong class="stat" id="statuses">
            {{ $user->statuses()->count() }}
        </strong>
        weibo
    </a>
</div>
