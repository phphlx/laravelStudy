@can('follow', $user)
  <div class="text-center mt-2 mb-4">
    @if (Auth::user()->isFollowing($user->id))
      <form action="{{ route('followers.destroy', $user) }}" method="POST">
        {{csrf_field()}}
        {{ method_field('DELETE') }}

        <button class="btn btn-outline-primary btn-sm">unfollow</button>
      </form>
    @else
      <form action="{{ route('followers.store', $user) }}" method="POST">
        {{ csrf_field() }}

        <button class="btn btn-sm btn-primary">follow</button>
      </form>
    @endif
  </div>
@endcan
