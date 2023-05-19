@extends('layout.app')

@section('content')

    <div class="container position-relative p-5 mx-auto">

        <div class="d-flex justify-content-between mb-3">
            <div class="col-lg-4 d-inline-flex">
                <h4>Selamat pagi, Customer</h4>
            </div>
            <div class="col-lg-4 d-inline-flex me-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>
        </div>

        <div class="banner col-lg-6 bg-warning d-inline-flex me-5 mt-3" style="width: 720px; height: 200px;">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset ('assets/img/banner1.png') }}" alt="">
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

        <div class="col-lg-4 d-inline-flex position-absolute mt-3" style="width: 284px; height: 500px;">
            <div class="card w-75">
                <div class="card-header bg-danger text-white fw-bold">
                    Kategori
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <a href="">Service Elektronik</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Bengkel Terdekat</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Jasa Pasang Internet</a>
                    </li>
                    <li class="list-group-item">
                        <a href="">Penjahit</a>
                    </li>
                  </ul>
            </div>
        </div>

        <div class="col-lg-8 d-flex justify-content-between mt-5">
            <h5 class="d-inline-flex">Mitra Kami</h5>
            <a href="{{ route('mitra') }}" class="d-inline-flex">Lihat semua -></a>
        </div>

        <div class="feed">
            <div class="feed col-lg-4 bg-warning mt-3 d-inline-flex me-2" style="width: 232px; height: 200px;">
                <img src="{{ asset ('assets/img/feed1.png') }}" alt="">
            </div>
            <div class="feed col-lg-4 bg-warning mt-3 d-inline-flex me-2" style="width: 232px; height: 200px;">
                <img src="{{ asset ('assets/img/feed2.png') }}" alt="">
            </div>
            <div class="feed col-lg-4 bg-warning mt-3 d-inline-flex me-2" style="width: 232px; height: 200px;">
                <img src="{{ asset ('assets/img/feed3.png') }}" alt="">
            </div>
        </div>

    
    </div>


        <footer class="d-flex">
            <div class="container d-flex justify-content-center align-items-center bg-primary" style="max-width: 1300px; height: 80px;">
                <p class="text-white">Copyright 2023</p>
            </div>
        </footer>
  

@endsection