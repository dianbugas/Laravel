<div>
    <div class="mb-3">
        <input type="text" class="form-control" wire:model="search" placeholder="Cari Product">
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $item)
                <tr>
                    <td>{{ $products->firstItem() + $index }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links() }}
</div>
