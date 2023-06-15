@extends('layout.app')

@section('content')
    <div class="container position-relative p-5 mx-auto">

        {{-- SEARCH BAR --}}
        <div class="d-flex justify-content-between mb-3">
            <div class="col-lg-4 d-inline-flex">
                <h4 id="greeting" class="fw-bold d-flex justify-content-center align-items-center">, {{ $user['username'] }}
                </h4>
            </div>
            <div class="col-lg-4 d-inline-flex me-3">
                <form class="d-flex" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari Layanan" style="width: 300px">
                        <div class="input-group-append"><button class="btn btn-primary"><i
                                    class="fas fa-search"></i></button></div>
                    </div>
                </form>
            </div>
        </div>
        {{-- END SEARCH BAR --}}


        {{-- BANNER --}}
        <div class="banner col-lg-6 bg-warning d-inline-flex me-5 mt-3" style="width: 720px; height: 200px;">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner">
                    @foreach ($banners as $banner)
                        <div class="carousel-item active">
                            <img src="http://localhost:5000/api/user/banner/{{ $banner['id'] }}?token={{session('token')}}" alt="">
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        {{-- END BANNER --}}

        {{-- Kategori Bar --}}
        <div class="col-lg-4 d-inline-flex position-absolute mt-3">
            <div class="card" style="width: 240px">
                <div class="card-header bg-danger text-white fw-bold">
                    Kategori
                </div>
                <div class="card-body">
                    <div data-bs-spy="scroll" data-bs-smooth-scroll="true"
                        class="scrollspy-example bg-body-tertiary p-0 rounded-2" tabindex="0">
                        <ul class="list-group list-group-flush">
                            @foreach ($categories as $category)
                                <li class="list-group-item">
                                    <a href="">{{ $category['category_name'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Kategori Bar --}}

        {{-- FEED --}}
        <div class="col-lg-8 d-flex justify-content-between mt-5">
            <h5 class="fw-bold d-inline-flex">Mitra Kami</h5>
            <a href="{{ route('mitra') }}" class="d-inline-flex">Lihat semua&nbsp&nbsp<i class="bi bi-arrow-right"></i></a>
        </div>

        <div class="col-lg-9">
            @foreach ($partners as $partner)
                <div class="feed feed-hover-animation border col-lg-4 bg-warning mt-3 d-inline-flex me-3" style="width: 200px; height: 200px;"">
                    <img src="http://localhost:5000/api/admin/partner/avatar/{{ $partner['id'] }}?token={{session('token')}}" style="width: 100%; height: 100%;"alt="">
                </div>
            @endforeach
        </div>
        {{-- END FEED --}}

    </div>

    <script>
        // Mendapatkan elemen dengan ID "greeting"
        var greetingElement = document.getElementById("greeting");

        // Mendapatkan waktu saat ini
        var currentTime = new Date();
        var currentHour = currentTime.getHours();

        // Menentukan salam yang sesuai berdasarkan waktu saat ini
        var greeting;
        if (currentHour < 6) {
            greeting = "Selamat pagi";
        } else if (currentHour < 12) {
            greeting = "Selamat pagi";
        } else if (currentHour < 15) {
            greeting = "Selamat siang";
        } else if (currentHour < 18) {
            greeting = "Selamat sore";
        } else {
            greeting = "Selamat malam"
        }

        // Mengganti teks salam pada elemen
        greetingElement.innerText = greeting + ", " + greetingElement.innerText.split(", ")[1];
    </script>
@endsection
