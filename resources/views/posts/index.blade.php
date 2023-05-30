<x-layout>
    <section class="py-8 max-w-md max-auto">
        <h1>
            Dashboard
        </h1>

        <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
            @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
            @else
            <p class="text-center">
                No Posts Yet. Please check back Later !
            </p>
            @endif
        </main>
    </section>
</x-layout>