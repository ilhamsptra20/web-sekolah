@extends('layouts.admin')

@section('title', 'Edit About Cards')

@section('page-content')
<div class="card">
    <div class="card-header">Edit About Cards</div>
    <div class="card-body">
        <form action="{{ route('about-cards.update', $aboutcards->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $aboutcards->title }}">
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('about-cards.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection