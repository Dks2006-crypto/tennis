<div class="container text-center">
    <div class="">
        <div class="grid grid-cols-3 gap-3">
            @foreach ($posts as $post)
                <x-card.post-card :post="$post" />
            @endforeach
        </div>
    </div>
</div>
