@extends('layouts.admin')

@section('title', 'Contact Messages List')

@section('page-content')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>Contact Messages List</h5>
        <a href="{{ route('contact-messages.create') }}" class="btn btn-primary">+ Create</a>
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