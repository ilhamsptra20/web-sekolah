@extends('layouts.admin')

@section('title', 'Show About Cards')

@section('page-content')
<div class="card">
    <div class="card-header">About Cards Detail</div>
    <div class="card-body">
        <h5>{{ $aboutcards->title }}</h5>
        <div class="mt-3">
            <a href="{{ route('about-cards.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('about-cards.edit', $aboutcards->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection