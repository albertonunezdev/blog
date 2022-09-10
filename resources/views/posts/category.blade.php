<x-app-layout>
    <div class="mx-auto max-w-5xl px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center font-bold text-4xl mb-6">Categoría: {{ $category->name }}</h1>

        @foreach ($posts as $post)
            <article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{ Storage::url($post->image->url) }}" alt="">

                <div class="px-6 py-4"> 
                    <h1 class="font-bold text-xl mb-2">
                        <a href="{{ route('posts.show', $post) }}">{{ $post->name }}</a>
                    </h1>

                    <div class="text-gray-700">
                        {{ $post->extract }}
                    </div>
                </div>

                <div class="px-6 pt-4 pb-6">
                    @foreach ($post->tags as $tag)
                        <a href="" class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm text-gray-700 mr-2">{{$tag->name}}</a>
                    @endforeach
                </div>
            </article>
        @endforeach

        <div class="mb-4">
            {{ $posts->links() }}
        </div>
    </div>
</x-app-layout>