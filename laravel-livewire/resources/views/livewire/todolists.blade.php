<div>
    <div class="container">
        <div class="card mb-4">
            <h5 class="card-header">Form</h5>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" @error('body') is-invalid @enderror wire:model="body"
                            placeholder="Apakah Aktivitas kamu sekarang?">
                        @error('body')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button wire:click="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <ul class="list-group" wire:sortable="updateTaskOrder">
            @foreach ($activity as $item)
                <li class="list-group-item d-flex justify-content-between" wire:sortable.item="{{ $item->id }}"
                    wire:key="activity-{{ $item->id }}">
                    <span wire:sortable.handle role="button">{{ $item->body }}</span>
                    <button class="btn budge bg-danger" wire:click="delete({{ $item->id }})">Delete</button>
                </li>
            @endforeach
        </ul>
    </div>
</div>
