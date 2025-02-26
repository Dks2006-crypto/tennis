<div class="container text-center">
    <div class="row">
        <div class="col">
            @foreach ($posts as $post)
            <x-card.post-card :post="$post" />
            @endforeach
        </div>
    </div>
</div>
