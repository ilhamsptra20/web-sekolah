@extends('layouts.admin')

@section('title', 'Create Study Programs')

@section('page-content')
<div class="card">
    <div class="card-header">Create Study Programs</div>
    <div class="card-body">
        <form action="{{ route('study-programs.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" 
                       value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" maxlength="80">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('study-programs.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection