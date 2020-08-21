<a href="{{ route('users.followings', $user) }}">
  <strong class="stat" id="following">
    {{ count($user->followings) }}
  </strong>
  关注
</a>
<a href="{{ route('users.followers', $user) }}">
  <strong class="stat" id="followers">
    {{ count($user->followers) }}
  </strong>
  粉丝
</a>
<a href="{{ route('users.show', $user) }}">
  <strong id="statuses" class="stat">
    {{ $user->statuses()->count() }}
  </strong>
  微博
</a>
