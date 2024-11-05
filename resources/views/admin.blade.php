@extends('master')

@section('title', 'Admin Page')

@section('style')

@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Data Film</h3>
        <a href="{{ route('movies.create') }}" class="btn btn-sm btn-success">Tambah Film</a>
    </div>

    @if(session('success'))
        <div id="flash-message" class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @elseif(session('error'))
        <div id="flash-message" class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <table class="table table-striped-columns">
        <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Foto</th>
            <th scope="col">Judul</th>
            <th scope="col">Tahun</th>
            <th scope="col">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($movies as $k => $movie)
            <tr>
                <th scope="row">{{ $k + 1 }}</th>
                <td><img src="{{ asset('storage/' . $movie->photo) }}" alt="{{ $movie->title }}" width="100" height="150" style="object-fit: cover;"></td>
                <td>{{ $movie->title }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>
                    <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('movies.show', $movie->id) }}" class="btn btn-sm btn-primary">Detail</a>
                        <a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <button class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection

@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const flashMessage = document.getElementById('flash-message');
            if (flashMessage) {
                setTimeout(() => {
                    flashMessage.classList.remove('show');
                    flashMessage.classList.add('fade');
                    setTimeout(() => flashMessage.remove(), 500);
                }, 3000);
            }
        });
    </script>
@endsection

