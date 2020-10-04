<a href="#">
  <strong class="stat" id="following">
    {{ count($user->followings) }}
  </strong>
  follow
</a>
<a href="#">
  <strong class="stat" id="followers">
    {{ count($user->followers) }}
  </strong>
  fans
</a>
<a href="#">
  <strong class="stat" id="statuses">
    {{ $user->statuses()->count() }}
  </strong>
  statuses
</a>
