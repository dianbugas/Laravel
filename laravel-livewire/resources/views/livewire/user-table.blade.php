<div>
    @include('my_components.alert_success')
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ route('users.details', $item->id) }}" class="badge bg-primary">Detail</a>
                        <a href="{{ route('users.edit', $item->id) }}" class="badge bg-warning">Edit</a>
                        <button wire:click="delete({{ $item->id }})" class="badge bg-danger">Delete</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
