@extends('master')

@section('title', 'Edit Film')

@section('content')
    <div class="container mt-2">
        <form method="POST" action="{{ route('movies.update', $movie->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $movie->title }}" required>
            </div>
            <div class="mb-3">
                <label for="genre" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genre" name="genre" value="{{ $movie->genre }}" required>
            </div>
            <div class="mb-3">
                <label for="release_date" class="form-label">Tanggal Rilis</label>
                <input type="date" class="form-control" id="release_date" name="release_date" value="{{ $movie->release_date }}" required>
            </div>
            <div class="mb-3">
                <label for="age_restriction" class="form-label">Batasan Usia</label>
                <input type="number" class="form-control" id="age_restriction" name="age_restriction" value="{{ $movie->age_restriction }}" required>
            </div>
            <div class="mb-3">
                <label for="rating" class="form-label">Rating</label>
                <input type="number" step="0.1" min="0" max="10" class="form-control" id="rating" name="rating" value="{{ $movie->rating }}" required>
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Sutradara</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ $movie->director }}" required>
            </div>
            <div class="mb-3">
                <label for="duration" class="form-label">Durasi (Menit)</label>
                <input type="number" class="form-control" id="duration" name="duration" value="{{ $movie->duration }}" required>
            </div>
            <div class="mb-3">
                <label for="trailer" class="form-label">Link Trailer</label>
                <input type="text" class="form-control" id="trailer" name="trailer" value="{{ $movie->trailer }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $movie->description }}</textarea>
            </div>
            <div class="mb-3">
                <img src="{{ asset('storage/' . $movie->photo) }}" height="150" width="100" alt="{{ $movie->title }}"><br>
                <label for="photo" class="form-label">Foto</label>
                <input type="file" class="form-control" id="photo" name="photo" accept="image/*">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

