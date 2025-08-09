@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-6">Buat Post Baru</h1>

    <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Judul</label>
            <input type="text" name="title" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Konten</label>
            <textarea name="content" rows="4" 
                class="w-full border-gray-300 rounded-lg shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                required></textarea>
        </div>

        <div>
            <button type="submit" 
                class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                Simpan
            </button>
        </div>
    </form>
</div>
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

