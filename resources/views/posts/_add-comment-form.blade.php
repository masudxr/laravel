@auth
<form method="POST" action="/posts/{{ $post->slug }}/comments" class="border border-gray-400 p-6 rounded-xl">
    @csrf
    <header class="flex items-center">
        <img src="https:/i.pravatar.cc/60?id={{ auth()->id() }}" alt="" width="40" height="40" class="rounded-full">

        <h2 class="ml-4">
            Put Your Commment Here !!
        </h2>
    </header>
    <Div class="mt-6">
        <textarea name="body" class="w-full text-sm" cols="30" rows="10" placeholder="Quick, think of something to say!" required></textarea>
        @error('body')
        <span>
            {{ $message }}
        </span>
        @enderror
    </Div>
    <div>
        <button type="submit">
            Post Comment
        </button>
    </div>

</form>
@else
<p>
    <a href="/login">Log in to put your comment</a>
</p>

@endauth