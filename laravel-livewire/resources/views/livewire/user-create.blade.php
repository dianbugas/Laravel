<div>
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control is-invalid" wire:model="name">
                    @error('name')
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="text" class="form-control" wire:model="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Nama</label>
                    <input type="text" class="form-control" wire:model="password">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
