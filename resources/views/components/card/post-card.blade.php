@props(['post'])
<div class="card border p-6 rounded-xl" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->description }}</p>
    </div>
</div>
