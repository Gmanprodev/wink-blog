<x-app>
    <article class="bg-gray-100 border border-black border-opacity-5 rounded-xl">
        <div class="py-6 px-5">
            <div>
                <img src="{{ $post->featured_image }}" alt="Blog Post image" class="rounded-xl bg-contain object-contain h-48 w-120">
            </div>
            <h1 class="font-bold text-3xl lg:text-4xl mb-5 mt-2">
                {{ $post->title }}
            </h1>
            <div class="flex items-center text-sm">
                <img src="{{ $post->author->avatar }}" alt="Author avatar" class="h-12 rounded-xl">
                <div class="ml-3">
                    <h5 class="font-bold">{{ $post->author->name }}</h5>
                </div>
            </div>
            <h3 class="mt-2 mb-2 block text-gray-400">
                Published <time>{{ $post->created_at->diffForHumans() }}</time>
            </h3>
            <div>
                <p class="mt-6 text-sm text-blue-400">
                    @foreach($post->tags as $tag)
                        <a href="/blog?tag={{ $tag->slug }}">
                        <span class="inline-block py-1 px-3 text-xs font-semibold bg-blue-100 text-blue-600 rounded-xl mr-3">
                            {{ $tag->name }}
                        </span>
                        </a>
                    @endforeach
                </p>
            </div>

            <div class="space-y-4 lg:text-lg leading-loose">
                <p>{{ $post->content }}</p>
            </div>
        </div>
    </article>
</x-app>



