<ul>
    @foreach($posts as $post)
        <li>
            <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a>,
            {{ $post->created_at->diffForHumans() }},
            {{ $post->author->name }},
        </li>
    @endforeach
</ul>