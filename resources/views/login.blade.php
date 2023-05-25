@extends('layout.app')

@section('content')
    <div class="container p-5">
        <div class="row">
            <div class="col">
              <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('assets/img/call1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Panggil bantuan dimanapun kamu berada</h5>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('assets/img/astronot.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Kalo lagi di Luar Angkasa please ga usah manggil</h5>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('assets/img/call2.gif') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Apalagi kalo manggil cuma buat menghoetang</h5>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col m-5">
                <div class="card w-75">
                    <div class="card-body">
                        <form class="">
                            <h2 class="mb-3 text-center fw-bold">Login</h2>
                            <div class="mb-3">
                              <label for="email" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                              <div id="emailHelp" class="invalid-feedback">
                                email tidak terdaftar atau salah.
                              </div>
                            </div>
                            <div class="mb-3">
                              <label for="password" class="form-label">Password</label>
                              <input type="password" class="form-control" id="password" aria-describedby="passwordHelp">
                              <div id="passwordHelp" class="invalid-feedback">
                                password salah.
                              </div>
                            </div>
                            <a href="" class="btn btn-primary fw-bold w-100">Login</a>
                          </form>
                          <p class="mt-3 text-center">Belum punya akun?
                            <a href="{{ route('register') }}">Daftar</a>
                          </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection