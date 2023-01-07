@extends('layouts.master')
@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
<div class="container">
    <h1 class="md-4">live wire</h1>
    <div class="row mb-4">
        <div class="col-md-6">
            @livewire('user-create')
        </div>
    </div>
    <div>
        @livewire('user-table')
    </div>
</div>
@endsection
