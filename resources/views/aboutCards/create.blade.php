@extends('layouts.admin')

@section('title', 'Create About Cards')

@section('page-content')
<div class="card">
    <div class="card-header">Create About Cards</div>
    <div class="card-body">
        <form action="{{ route('about-cards.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control">
            </div>
            <button class="btn btn-success">Save</button>
            <a href="{{ route('about-cards.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection