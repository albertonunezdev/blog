<x-app-layout>
    <div class="container py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-6">
            @foreach ($posts as $post)
                <article class="w-full h-80 bg-cover bg-center md:cols-span-2 @if ($loop->first) @endif" style="background-image: url(https://placehold.jp/640x480.png)">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach ($post->tags as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{ $tag->name }}</a>
                            @endforeach
                        </div>

                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="{{ route('posts.show', $post) }}">
                                {{ $post->name }}
                            </a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>
        
        <div class="mt-4">
            {{$posts->links()}}
        </div>
    </div>
</x-app-layout>