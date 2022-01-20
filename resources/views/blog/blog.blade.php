<x-app>  
    <div class="lg:grid lg:grid-cols-2">
        @foreach($posts as $post)
            <article
                class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
                <div class="py-6 px-5">
                    <div>
                        <img src="{{ $post->featured_image }}" alt="Blog Post image" class="rounded-xl bg-contain object-contain h-48 w-120">
                    </div>
                    <div class="mt-8 flex flex-col justify-between">
                        <header>
                            <div class="mt-4">
                                <h1 class="text-3xl">
                                    {{ $post->title }}
                                </h1>

                                <span class="mt-2 block text-gray-400 text-xs">
                                    Published <time>{{ $post->created_at->diffForHumans() }}</time>
                                </span>
                            </div>
                        </header>
                        <div class="text-sm mt-4">
                            <p>
                                {{ $post->excerpt }}
                            </p>
                        </div>
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
                        <footer class="flex justify-between items-center mt-8">
                            <div class="flex items-center text-sm">
                                <img src="{{ $post->author->avatar }}" alt="Author avatar" class="h-24 rounded-xl">
                                <div class="ml-3">
                                    <h5 class="font-bold">{{ $post->author->name }}</h5>
                                </div>
                            </div>
                            <div>
                                <a href="{{ route('posts.show', $post->slug) }}"
                                    class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8">
                                    Read More
                                </a>
                            </div>
                        </footer>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</x-app>