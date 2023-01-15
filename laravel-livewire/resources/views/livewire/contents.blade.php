<div class="container py-5">
    @foreach ($articles as $item)
        <h5>{{ $item->title }}</h5>
        <h6>{{ $item->body }}</h6>
    @endforeach
    @if ($count < $total_articles)
        <button class="btn btn-primary" wire:click="loadmore">Load more</button>
        <span wire:loading>loading ...</span>
    @endif
</div>
