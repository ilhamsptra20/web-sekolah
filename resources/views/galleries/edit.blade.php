@extends('layouts.admin')

@section('title', 'Edit gallery')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/filepond/filepond.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css') }}">
@endsection

@section('page-content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('galleries.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="mb-3">
                <label class="form-label">Caption</label>
                <input type="text" name="caption" class="form-control" value="{{ old('caption', $gallery->caption) }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" 
                       name="image" 
                       class="filepond"
                       accept="image/png, image/jpeg, image/jpg, image/gif"
                       data-old-file="{{ $gallery->image ? asset('storage/' . $gallery->image) : '' }}" />
            </div>

            <button class="btn btn-success">Save</button>
            <a href="{{ route('galleries.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/libs/filepond/filepond.min.js')}}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js')}}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js')}}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js')}}"></script>
<script src="{{ asset('assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js')}}"></script>

<script>
    // Register plugins
    FilePond.registerPlugin(
        FilePondPluginImagePreview,
        FilePondPluginFileValidateSize,
        FilePondPluginImageExifOrientation,
        FilePondPluginFileEncode
    );

    // Apply FilePond
    const inputElement = document.querySelector('.filepond');
    const oldFile = inputElement.dataset.oldFile;

    const pond = FilePond.create(inputElement, {
        allowMultiple: false,
        maxFileSize: '3MB',
        storeAsFile: true,
    });

    // Load existing image if any
    if(oldFile) {
        pond.addFile(oldFile);
    }
</script>
@endsection
