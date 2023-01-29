@extends('layouts.app')

@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    @livewire('todolist');
@endsection
