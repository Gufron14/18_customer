@extends('layout.app')

@section('content')
    <div class="container position-relative p-5">
        
        {{-- SEARCH BAR--}}
        <div class="d-flex justify-content-between mb-5">
            <div class="col-lg-6">
                <h4>Mitra</h4>
            </div>
            <div class="col-lg-6 d-inline-flex me-4">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="cari layanan" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                  </form>
            </div>
        </div>
        {{-- SEARCH BAR--}}
        

        {{-- MITRA --}}
        <div class="col-lg-3 d-inline-flex me-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset ('assets/img/feed1.png') }}" alt="">
                <div class="card-body">
                    <div class="card-container position-relative d-flex justify-content-between mb-3">
                        <h4 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">Perbaiki Akhlak Mu</h4>

                        <div class="icon">
                            <a href="" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>

                    <div class="detail d-flex justify-content-between">
                        <p class="d-inline">
                            <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp500 M</p>
                        <p class="d-inline">Jl. Kematian</p>
                    </div>
                    <div class="detail d-flex justify-content-between">
                        <p class="d-inline"><i class="bi bi-door-open-fill"></i>&nbsp&nbspBuka</p>
                        <p class="d-inline">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p>
                    </div>

                   
                    <a href="" class="call btn btn-primary mt-3 fw-bold w-100">Panggil</a>
                </div>
              </div>
        </div>

        <div class="col-lg-3 d-inline-flex me-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset ('assets/img/feed1.png') }}" alt="">
                <div class="card-body">
                    <div class="card-container position-relative d-flex justify-content-between mb-3">
                        <h4 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">Service Pikiran Kotor</h4>

                        <div class="icon">
                            <a href="" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>

                    <div class="detail d-flex justify-content-between">
                        <p class="d-inline">
                            <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp500 M</p>
                        <p class="d-inline">Jl. Kematian</p>
                    </div>
                    <div class="detail d-flex justify-content-between">
                        <p class="d-inline"><i class="bi bi-door-open-fill"></i>&nbsp&nbspBuka</p>
                        <p class="d-inline">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p>
                    </div>

                   
                    <a href="" class="call btn btn-primary mt-3 fw-bold w-100">Panggil</a>
                </div>
            </div>
        </div>
        {{-- MITRA --}}

        <div class="col-lg-3 d-inline-flex">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset ('assets/img/feed1.png') }}" alt="">
                <div class="card-body">
                    <div class="card-container position-relative d-flex justify-content-between mb-3">
                        <h4 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">Bengkel Hati & Pikiran</h4>

                        <div class="icon">
                            <a href="" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                                <i class="fas fa-comment"></i>
                            </a>
                        </div>
                    </div>

                    <div class="detail d-flex justify-content-between">
                        <p class="d-inline">
                            <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp500 M</p>
                        <p class="d-inline">Jl. Kematian</p>
                    </div>
                    <div class="detail d-flex justify-content-between">
                        <p class="d-inline"><i class="bi bi-door-open-fill"></i>&nbsp&nbspBuka</p>
                        <p class="d-inline">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p>
                    </div>

                   
                    <a href="" class="call btn btn-primary mt-3 fw-bold w-100">Panggil</a>
                </div>
            </div>
        </div>

    </div>
@endsection