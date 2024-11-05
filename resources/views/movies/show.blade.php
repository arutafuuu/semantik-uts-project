@extends('master')

@section('title', 'Watch This!')

@section('style')

@endsection

@section('content')
    <div class="container d-flex justify-content-center align-items-center">
        <div class="text-center">
            <img src="{{ asset('storage/' . $movie->photo) }}" class="img-fluid mb-3" height="300px" width="200px"
                 alt="Gambar">
            <h1>{{ $movie->title  }}</h1>
            <h6>Sutradara : {{ $movie->director }}</h6>
            <h6>Genre : {{ $movie->genre }}</h6>
            <h6>Rating Usia : {{ $movie->age_restriction }}</h6>
            <h6>Durasi : {{ $movie->duration }}</h6>
            <h6>Tanggal Rilis : {{ $movie->release_date }}</h6>
            <div class="mb-2" style="color: goldenrod;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-star-fill mb-1 mr-1" viewBox="0 0 16 16">
                    <path
                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                </svg>
                <span style="font-weight: bold; font-size: large">{{ $movie->rating }}</span>
            </div>
            <p>{{ $movie->description  }}</p>
            <a href="{{ route('movies.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
@endsection
