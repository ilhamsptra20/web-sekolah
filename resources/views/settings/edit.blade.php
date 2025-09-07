@extends('layouts.admin')

@section('title', 'Edit Settings')

@section('page-content')
<div class="card">
    <div class="card-header">Edit Settings</div>
    <div class="card-body">
        <form action="{{ route('settings.update', $settings->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $settings->title }}">
            </div>
            <button class="btn btn-success">Update</button>
            <a href="{{ route('settings.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection