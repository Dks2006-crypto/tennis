@props(['post'])
<div class="card" style="width: 100%;">
    <div class="card-body">
        <h5 class="card-title">{{ $post->title }}</h5>
        <p class="card-text">{{ $post->description }}</p>
    </div>
</div>
