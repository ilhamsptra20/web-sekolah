@extends('layouts.admin')

@section('title', 'Show Carousels')

@section('page-content')
<div class="card">
    <div class="card-header">Carousels Detail</div>
    <div class="card-body">
        <h5>{{ $carousels->title }}</h5>
        <div class="mt-3">
            <a href="{{ route('carousels.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('carousels.edit', $carousels->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection