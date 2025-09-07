@extends('layouts.admin')

@section('title', 'Show Study Programs')

@section('page-content')
<div class="card">
    <div class="card-header">Study Programs Detail</div>
    <div class="card-body">
        <h5>{{ $studyprograms->title }}</h5>
        <div class="mt-3">
            <a href="{{ route('study-programs.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('study-programs.edit', $studyprograms->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection