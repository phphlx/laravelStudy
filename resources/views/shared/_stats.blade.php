<a href="{{ route('users.followings', $user) }}">
  <strong class="stat" id="following">
    {{ count($user->followings) }}
  </strong>
  follow
</a>
<a href="{{ route('users.followers', $user) }}">
  <strong class="stat" id="followers">
    {{ count($user->followers) }}
  </strong>
  fans
</a>
<a href="{{ route('users.show', $user) }}">
  <strong class="stat" id="statuses">
    {{ $user->statuses()->count() }}
  </strong>
  statuses
</a>
