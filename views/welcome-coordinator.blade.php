@extends('layouts.coordinator')

@section('section-coordinator')
    @if (auth()->user()->role == 'admin')
        @include('pages.admin.dashboard.index')
    @elseif (auth()->user()->role == 'owner')
        @include('pages.owner.dashboard.index')
    @endif
@endsection