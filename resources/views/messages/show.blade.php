@extends('layouts.admin')

@section('title', 'Show Contact Messages')

@section('page-content')
<div class="card">
    <div class="card-header">Contact Messages Detail</div>
    <div class="card-body">
        <h5>{{ $contactmessages->title }}</h5>
        <div class="mt-3">
            <a href="{{ route('contact-messages.index') }}" class="btn btn-secondary">Back</a>
            <a href="{{ route('contact-messages.edit', $contactmessages->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection