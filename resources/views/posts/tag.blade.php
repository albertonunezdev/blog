<x-app-layout>
    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center font-bold text-4xl mb-6">Etiqueta: {{ $tag->name }}</h1>

        @foreach ($posts as $post)
            <x-card-post :post="$post"/>
        @endforeach

        <div class="mb-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>