@props(['post'])
<div class="card border rounded-xl" style="width: 100%;">
    <div class="card-body w-full">
        <h3 class="card-title py-2 w-full text-3xl font-bold border-b">{{ $post->title }}</h3>
        <p class="card-text w-full text-xl py-1">{{ $post->description }}</p>
        <p class="w-full text-sm py-1">{{ $post->content }}</p>
    </div>
</div>
