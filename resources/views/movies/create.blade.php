@extends('master')

@section('title', 'Tambah Film')

@section('content')
    <div class="container mt-2">
        <form method="POST" action="{{ route('movies.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre">
            </div>
            <div class="mb-3">
                <label for="release_date" class="form-label">Tanggal Rilis</label>
                <input type="date" class="form-control" id="release_date" name="release_date" required>
            </div>
            <div class="mb-3">
                <label for="age_restriction" class="form-label">Batasan Usia</label>
                <input type="number" class="form-control" id="age_restriction" name="age_restriction" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" step="0.1" min="0" max="10" class="form-control" id="rating" name="rating" required>
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Sutradara</label>
                <input type="text" class="form-control" id="director" name="director" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi (Menit)</label>
                <input type="number" class="form-control" id="duration" name="duration" required>
            </div>
            <div class="mb-3">
                <label for="trailer" class="form-label">Link Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Foto</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

