@extends('master')

@section('title', 'Beranda')

@section('style')

@endsection

@section('content')
    <h2 class="mt-3">Daftar Film Terbaik Bulan Ini</h2>

    <div class="mt-2">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="container my-4">
        <h2 class="font-weight-bold text-dark">Beranda Pilihan</h2>
        <p class="text-secondary">Kumpulan film terbaik sepanjang masa</p>

        <div class="row">
            <!-- Card 1 -->
                <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                    <div class="card h-100 shadow-sm" style="background-color: #f5f5f5">
                        <a href="#">
                            <img src="{{ asset('/images') }}/narnia1.jpeg" class="card-img-top" alt="The Chronicles of Narnia: The Lion, the Witch and the Wardrobe">
                        </a>
                        <div class="card-body d-flex flex-column text-center">
                            <div class="card-rating mb-2" style="color: goldenrod;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-star-fill mb-1 mr-1" viewBox="0 0 16 16">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                                <span style="font-weight: bold; font-size: large">7.7</span>
                            </div>
                            <h5 class="card-title">The Chronicles of Narnia: The Lion, the Witch and the Wardrobe</h5>
                            <div class="mt-auto">
                                <a href="#" class="mb-2 btn btn-outline-primary d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M2 15.5V2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.74.439L8 13.069l-5.26 2.87A.5.5 0 0 1 2 15.5m6.5-11a.5.5 0 0 0-1 0V6H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V7H10a.5.5 0 0 0 0-1H8.5z"/>
                                    </svg>
                                    <span>Watchlist</span>
                                </a>
                                <a href="#" class="btn btn-outline-danger d-block">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-btn-fill" viewBox="0 0 16 16">
                                        <path d="M0 12V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2m6.79-6.907A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814z"/>
                                    </svg>
                                    <span>Trailer</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 2 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('/images')  }}/narnia2.jpeg" class="card-img-top" alt="The Chronicles of Narnia: Prince Caspian">
                    <div class="card-body d-flex flex-column">
                        <div class="card-rating mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-star-fill mb-1 mr-1" viewBox="0 0 16 16">
                                <path
                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                            7.7
                        </div>
                        <h5 class="card-title text-center flex-grow-1 d-flex align-items-center justify-content-center mb-0">
                            The Chronicles of Narnia: Prince Caspian</h5>
                        <div class="mt-auto">
                            <a href="#" class="mb-2 btn btn-outline-primary watchlist d-block">+ Watchlist</a>
                            <a href="#" class="btn btn-outline-primary trailer d-block">▶ Trailer</a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Card 3 -->
            <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="narnia3.jpeg" class="card-img-top" alt="One Piece Fan Letter">
                    <div class="card-body text-center">
                        <div class="card-rating">⭐ 9.7</div>
                        <h5 class="card-title">One Piece Fan Letter</h5>
                        <a href="#" class="watchlist d-block">+ Watchlist</a>
                        <a href="#" class="trailer d-block">▶ Trailer</a>
                    </div>
                </div>
            </div>
            <!-- Tambahkan card lain sesuai kebutuhan -->
        </div>

        <!-- Popular Interests Section -->
        <div>
            <h2 class="category-title">Kategori Populer</h2>
            <div class="d-flex overflow-auto">
                <!-- Interest Card Example -->
                <div class="card me-3" style="width: 10rem;">
                    <img src="{{ asset('/images') }}/narnia3.webp" class="card-img-top" alt="Interest">
                    <div class="card-body">
                        <h6 class="card-title text-center">Superhero</h6>
                    </div>
                </div>
                <!-- Repeat for other interests -->
                <div class="card me-3" style="width: 10rem;">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Interest">
                    <div class="card-body">
                        <h6 class="card-title text-center">Coming-of-Age</h6>
                    </div>
                </div>
                <!-- Additional interest cards here -->
            </div>
        </div>
    </div>

@endsection


