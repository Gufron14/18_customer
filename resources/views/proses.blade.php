@extends('layout.app')

@section('content')
    <div class="container border p-5">
        <div class="row mb-3 m-3">
                <div class="card">
                    <div class="card-body d-flex flex-row">
                        <div class="col-4 d-flex d-inline-flex">
                            <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
                        </div>
                        <div class="col-4 d-inline-flex d-flex flex-column ms-3">
                            <div class="d-flex">Jasa Perbaiki Akhlak</div>
                            <h4 class="fw-bold d-block-flex">Kekurangan Akhlak</h4>
                            <div class="d-flex">Saya kekurangan akhlak dan etika yang mana ketika saya sedang maen mobile legends bersama pak ustadz saya sampah maniacnya</div>
                        </div>
                        <div class="col-4 text-center mt-3">
                            <h6>Menunggu persetujuan</h6>
                            <h2 class="fw-bold">04.43</h2>
                            <button class="btn btn-danger mt-3">
                                Batalkan Panggilan
                            </button>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row m-3">
                <div class="card">
                    <div class="card-body d-flex flex-row">
                        <div class="col-4 d-flex d-inline-flex">
                            <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
                        </div>
                        <div class="col-4 d-inline-flex d-flex flex-column ms-3">
                            <div class="d-flex">Jasa Perbaiki Akhlak</div>
                            <h4 class="fw-bold d-block-flex">Kekurangan Akhlak</h4>
                            <div class="d-flex">Saya kekurangan akhlak dan etika yang mana ketika saya sedang maen mobile legends bersama pak ustadz saya sampah maniacnya</div>
                        </div>
                        <div class="col-4 text-center mt-3">
                            <h6>Menunggu persetujuan</h6>
                            <h2 class="fw-bold">04.43</h2>
                            <button class="btn btn-danger mt-3">
                                Batalkan Panggilan
                            </button>
                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection