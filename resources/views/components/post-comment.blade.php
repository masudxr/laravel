@props(['comment'])
<article class="flex bg-gray-200 border border-gray-400 p-6 rounded-xl space-x-4">
    <div>
        <img src="https:/i.pravatar.cc/60?id={{ $comment->user_id}}" alt="" width="60" height="60" class="rounded-xl">
    </div>
    <div>
        <header>
            <h2 class="font-bold">{{ $comment->author->username }}!</h2>
            <p class="text-xs">
                Posted
                <time>{{ $comment->created_at}}</time>
            </p>
        </header>
        <p>
            {{ $comment->body}}
        </p>
    </div>
</article>