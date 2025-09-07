@extends('layouts.admin')

@section('title', 'studyPrograms List')

@section('page-content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>studyPrograms List</h5>
        <a href="{{ route('study-programs.create') }}" class="btn btn-primary">+ Create</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($studyPrograms as $index => $achievement)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $achievement->title }}</td>
                        <td>{{ $achievement->description }}</td>
                        <td>
                            <a href="{{ route('study-programs.edit', $achievement->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('study-programs.destroy', $achievement->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No studyPrograms found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
@if (session('success'))
<script>
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: "{{ session('success') }}",
        showConfirmButton: false,
        timer: 1500,
        showCloseButton: true
    });
</script>
@endif
@endsection
