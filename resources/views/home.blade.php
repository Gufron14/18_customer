@extends('layout.app')

@section('content')

    <div class="container position-relative p-5 mx-auto">

        {{-- SEARCH BAR --}}
        <div class="d-flex justify-content-between mb-3">
            <div class="col-lg-4 d-inline-flex">
                <h4 class="fw-bold d-flex justify-content-center align-items-center">Selamat pagi, {{$customer['username']}}</h4>
            </div>
            <div class="col-lg-4 d-inline-flex me-3">
              <form class="d-flex" role="search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Cari Layanan" style="width: 300px">
                  <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>
                </div>
              </form>
          </div>
        </div>
        {{-- END SEARCH BAR --}}


        {{-- BANNER --}}
        <div class="banner col-lg-6 bg-warning d-inline-flex me-5 mt-3" style="width: 720px; height: 200px;">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset ('assets/img/banner1.png') }}" alt=""    >
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('assets/img/banner2.png') }}" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset ('assets/img/banner3.png') }}" alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
        {{-- END BANNER --}}

        {{-- Kategori Bar--}}
        <div class="col-lg-4 d-inline-flex position-absolute mt-3">
            <div class="card" style="width: 240px">
                <div class="card-header bg-danger text-white fw-bold">
                    Kategori
                  </div>
                  <div class="card-body">
                    <ul class="list-group list-group-flush">

                      @foreach ($categories as $category)
                        <li class="list-group-item">
                          <a href="">{{ $category['category_name']}}</a>
                        </li>
                      @endforeach
                    </ul>
                  </div>
            </div>
        </div>
        {{-- End Kategori Bar--}}
        
        {{-- FEED --}}
        <div class="col-lg-8 d-flex justify-content-between mt-5">
            <h5 class="fw-bold d-inline-flex">Mitra Kami</h5>
            <a href="{{ route('mitra') }}" class="d-inline-flex">Lihat semua&nbsp&nbsp<i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="feed">
            <div class="feed shadow col-lg-4 bg-warning mt-3 d-inline-flex me-2" style="width: 232px; height: 200px;">
                <img src="{{ asset ('assets/img/feed1.png') }}" alt="">
            </div>
            <div class="feed col-lg-4 bg-warning mt-3 d-inline-flex me-2" style="width: 232px; height: 200px;">
                <img src="{{ asset ('assets/img/feed2.png') }}" alt="">
            </div>
            <div class="feed col-lg-4 bg-warning mt-3 d-inline-flex me-2" style="width: 232px; height: 200px;">
                <img src="{{ asset ('assets/img/feed3.png') }}" alt="">
            </div>
        </div>
        {{-- END FEED --}}
    
    </div>

@endsection