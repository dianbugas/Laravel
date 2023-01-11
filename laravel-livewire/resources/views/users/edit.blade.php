@extends('layouts.master')
@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
<div class="container">
    <h1 class="md-4">Edit data</h1>
    <div class="row mb-4">
        <div class="col-md-6">
            @livewire('user-edit', ['user' => $user])
        </div>
    </div>
</div>
@endsection
