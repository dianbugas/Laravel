<div class="container py-5">
    @foreach ($news as $item)
        <h5>{{ $item->title }}</h5>
        <h6>{{ $item->body }}</h6>
    @endforeach
    @if ($count < $total_news)
        <button class="btn btn-primary" wire:click="loadmore">Load more</button>
        <span wire:loading>loading ...</span>
    @endif
</div>
