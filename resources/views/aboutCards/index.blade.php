@extends('layouts.admin')

@section('title', 'About Cards List')

@section('page-content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>About Cards List</h5>
        <a href="{{ route('about-cards.create') }}" class="btn btn-primary">+ Create</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead><tr><th>#</th><th>Title</th><th>Actions</th></tr></thead>
            <tbody>
                {{-- Loop data here --}}
            </tbody>
        </table>
    </div>
</div>
@endsection