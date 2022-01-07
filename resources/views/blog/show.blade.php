<x-app>
    <ul>
        <li>{{ $post->title }}</li>
        <li>{{ $post->content }}</li>
        <li>{{ $post->author->name }}</li>
        @if($post->tags->count() > 0)
            <li>{{ implode(', ', $post->tags->pluck('name')->toArray()) }}</li>
        @endif
        <li>{{ $post->publish_date->diffForHumans() }}</li>
    </ul>
</x-app>



