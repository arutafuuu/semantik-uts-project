@extends('master')

@section('title', 'Daftar Film')

@section('style')

@endsection

@section('content')
    <div class="container mb-4">
        <h2 class="mt-4">Mencari "{{ $query }}"</h2>
        <p class="text-secondary">Ini yang kami temukan</p>

        <div class="row">
            @foreach($movies as $movie)
                <!-- Card 1 -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <a href="{{ route('movies.show', $movie->id)  }}" class="text-decoration-none">
                        <div class="card h-100 shadow-sm" style="background-color: #f5f5f5">
                            <img src="{{ asset('storage/' . $movie->photo) }}" class="card-img-top"
                                 alt="{{ $movie->title }}" style="object-fit: cover;">
                            <div class="card-body d-flex flex-column text-center">
                                <div class="card-rating mb-2" style="color: goldenrod;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                         class="bi bi-star-fill mb-1 mr-1" viewBox="0 0 16 16">
                                        <path
                                            d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                    </svg>
                                    <span style="font-weight: bold; font-size: large">{{ $movie->rating }}</span>
                                </div>
                                <h5 class="card-title">{{ $movie->title }}</h5>
                                <div class="mt-auto">
                                    <a href="{{ route('movies.show', $movie->id)  }}"
                                       class="mb-2 btn btn-outline-primary d-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
                                        <span>Detail</span>
                                    </a>
                                    <a href="{{ $movie->trailer }}" class="btn btn-outline-danger d-block">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                             fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                                            <path
                                                d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/>
                                        </svg>
                                        <span>Trailer</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection


