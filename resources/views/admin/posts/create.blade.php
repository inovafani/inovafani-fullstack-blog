@extends('layouts.app')

@section('content')
<h1>Buat Post Baru</h1>

<form method="POST" action="{{route('posts.store')}}">
    @csrf

    <div>
        <label>Judul</label>
        <input type="text" name="title" value="{{old('title')}}">
    </div>

    <div>
        <label>Konten</label>
        <textarea name="content">{{old('content')}}</textarea>
    </div>

    <button type="submit">Simpan</button>
</form>
@endsection

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
        selector: 'textarea[name="content"]',
        height: 400,
        menubar: false,
        plugins: 'link image code lists',
        toolbar: 'undo redo | formatselect | bold italic | alignleft aligncenter alignright | bullist numlist | link image | code'
        })
    </script>
@endpush

