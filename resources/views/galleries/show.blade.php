@extends('layouts.admin')

@section('title', 'Show Galleries')

@section('page-content')
<div class="card">
    <div class="card-header">Galleries Detail</div>
    <div class="card-body">
        <h5>{{ $galleries->title }}</h5>
        <div class="mt-3">
            <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('galleries.edit', $galleries->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection