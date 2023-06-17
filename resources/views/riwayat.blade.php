@extends('layout.app')

@section('content')
    <div class="container py-4 mx-auto">
        <div class="row mb-3 m-3 gy-3">
            @if (count($calls) == 0)
                <p>Belum ada riwayat panggilan</p>
            @else
                @foreach ($calls as $call)
                    <div class="card border-0 shadow col-12 col-lg-10 mx-auto">
                        <div class="card-body d-lg-flex flex-lg-row d-sm-flex flex-sm-column">
                            <div class="col-lg-3 col-xl-3 col-sm-12 col-xs-12 text-center">
                                <img src="http://localhost:5000/api/user/partner/avatar/{{ $call['partner_id'] }}?token={{ session('token') }}"
                                    alt="img-fluid" style="width: 100%; height:200px; object-fit:cover">
                            </div>
                            <div class="ps-3 col-xl-6 col-lg-6 col-sm-12 col-xs-12 d-flex flex-column py-3 gap-3">
                                <div class="d-flex fw-bold">
                                    <div class="bg-success text-white px-3 py-2 rounded-pill">
                                        <i class="bi bi-telephone-fill me-3 fs-6 my-auto"></i>
                                        {{ $call['partner']['partner_name'] }}
                                    </div>
                                </div>
                                {{-- <h4 class="fw-bold">Ini Judul Masalahnya</h4> --}}
                                <p><strong>Keterangan:</strong> {{ $call['message'] }}</p>
                            </div>
                            <div
                                class="col-lg-3 col-xl-3 col-sm-12 col-xs-12 d-flex flex-column justify-content-center px-3 gap-2">
                                <div class="mb-2">
                                    <p class="my-0">
                                        {{ \Carbon\Carbon::parse($call['updated_at'])->format('Y-m-d H:i:s') }}
                                    </p>
                                    <h6 class="my-0 text-muted fw-semibold">{{ $call['progres']['progres'] }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif


        </div>
    </div>
@endsection
