@extends('layout.app')

@section('content')
    <div class="container border mx-auto">

        {{-- <div class="container ms-5 mt-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="{{ route('mitra') }}">Mitra</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ $partner['partner_name'] }}</li>
                </ol>
              </nav>
        </div> --}}
        

        {{-- BANNER MITRA --}}
        <div class="banner mt-5 bg-warning mx-auto mb-3" style="width: 880px; height: 200px;">
            <img src="{{ asset ('assets/img/banner1.png') }}" alt="">
        </div>
        {{-- BANNER MITRA --}}

        {{-- MENU --}}
        <div class="container">
            <ul class="list-inline text-center">
                <li class="list-inline-item ms-5"><a href="">Profil</a></li>
                <li class="list-inline-item ms-5"><a href="">Galeri</a></li>
                <li class="list-inline-item ms-5"><a href="">Promo</a></li>
                <li class="list-inline-item ms-5">
                    <button class="btn btn-primary fw-bold" style="border-radius: 50px">
                        Panggil
                    </button>
                </li>
            </ul>
        </div>
        {{-- MENU --}}
        <hr class="mx-auto" style="width: 880px;">
        {{-- BODY --}}
        <div class="container" style="width: 880px;">
            <h4>Tentang Kami</h4>

            <table class="mb-3 col-6 ">
                <tr>
                    <td>Nama Perusahaan</td>
                    <td>: {{ $partner['partner_name'] }} </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: {{ $partner['address'] }}</td>
                </tr>
                <tr>
                    <td>Tahun Didirikan</td>
                    <td>: 2008</td>
                </tr>
                <tr>
                    <td>Nomor Izin Operasional</td>
                    <td>: 9213092749873403289</td>
                </tr>
            </table>

            <p class="mb-5 text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iste explicabo delectus facere neque quidem laudantium accusamus magni, vitae consequuntur, dolore qui itaque ipsam mollitia, aut sint sapiente sed officia hic! Quas, non impedit eum incidunt dicta repellendus accusantium ab temporibus nesciunt asperiores! At, ut dicta aliquid architecto consequatur amet saepe quas sit culpa unde aspernatur omnis, similique dolorum. Sint doloremque quos iure maiores enim, facilis provident et neque distinctio fugit qui velit voluptates fugiat quae architecto aut itaque totam nemo culpa ipsum, est sit. Qui sit doloremque fugit nesciunt odio, impedit corrupti voluptatibus quos inventore exercitationem quas architecto, ratione necessitatibus!</p>
            
            
            <h4 class="mt-5 mb-3">Layanan Kami</h4>
            <div class="col-3 d-inline-flex ms-5">
                <div class="card">
                    <div class="card-body mx-auto">
                        <img src="{{ asset ('assets/img/avatar1.png')}}" alt="" style="width: 180px">
                    </div>
                </div>
            </div>

            <div class="col-3 d-inline-flex ms-5">
                <div class="card">
                    <div class="card-body mx-auto">
                        <img src="{{ asset ('assets/img/avatar1.png')}}" alt="" style="width: 180px">
                    </div>
                </div>
            </div>

            <div class="col-3 d-inline-flex ms-5 mb-5">
                <div class="card">
                    <div class="card-body mx-auto">
                        <img src="{{ asset ('assets/img/avatar1.png')}}" alt="" style="width: 180px">
                    </div>
                </div>
            </div>
            

            <div class="sosmed mb-3">
                <h4>Kontak</h4>
                <i class="icon bi-whatsapp"></i>
                <i class="icon bi-telephone-fill"></i>
                <i class="icon bi-instagram"></i>
                <i class="icon bi-facebook"></i>
                <i class="icon bi-twitter"></i>
            </div>

        </div>
        {{-- BODY --}}
    </div>
@endsection