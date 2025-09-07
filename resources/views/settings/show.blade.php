@extends('layouts.admin')

@section('title', 'Show Settings')

@section('page-content')
<div class="card">
    <div class="card-header">Settings Detail</div>
    <div class="card-body">
        <h5>{{ $settings->title }}</h5>
        <div class="mt-3">
            <a href="{{ route('settings.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('settings.edit', $settings->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection