@if ($user->id !== \Illuminate\Support\Facades\Auth::user()->id)
    <div id="follow_form">
        @if (\Illuminate\Support\Facades\Auth::user()->isFollowing($user))
            <form action="{{ route('followers.destroy', $user) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}

                <button class="btn btn-sm" type="submit">unfollow</button>
            </form>
            @else
            <form action="{{ route('followers.store', $user) }}" method="POST">
                {{ csrf_field() }}

                <button class="btn btn-sm btn-primary" type="submit">follow</button>
            </form>
        @endif
    </div>
@endif
