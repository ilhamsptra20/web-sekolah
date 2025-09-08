@extends('layouts.admin')

@section('title', 'Carousels List')

@section('page-content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5>Carousels List</h5>
        <a href="{{ route('carousels.create') }}" class="btn btn-primary">+ Create</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($carousels as $index => $carousel)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $carousel->title }}</td>
                        <td>
                            @if ($carousel->image)
                                <img src="{{ asset('storage/' . $carousel->image) }}" 
                                     alt="{{ $carousel->title }}" 
                                     style="height: 50px; width: auto;" class="rounded">
                            @else
                                -
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('carousels.edit', $carousel->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('carousels.activate', $carousel->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm @if ($carousel->status) btn-success @else btn-warning @endif"> @if ($carousel->status) Activate @else Deactivate @endif</button>
                            </form>
                            <form action="{{ route('carousels.destroy', $carousel->id) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No carousels found.</td>
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
