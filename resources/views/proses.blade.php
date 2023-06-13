@extends('layout.app')

@section('content')
  <div class="container p-5">
    <div class="row mb-3 m-3">
      @if(count($calls) == 0)
        <p>Belum ada riwayat panggilan</p>
      @else
        @foreach($calls as $call)
          <div class="card mb-3 mx-auto">
            <div class="card-body d-flex flex-row d-inline-flex">
              <div class="col-3">
                <img src="http://localhost:5000/api/user/partner/avatar/{{ $call['partner_id'] }}?token={{session('token')}}" alt="" style="width: 200px; height:200px;">
              </div>
              <div class="col-6 me-5 d-flex flex-column justify-content-center">
                <span>anda memanggil</span>
                <div class="d-flex h4 fw-bold">{{$call['partner']['partner_name']}}</div>
                {{-- <h4 class="fw-bold">Ini Judul Masalahnya</h4> --}}
                <div class="d-flex">
                  {{ $call['message'] }}
                </div>
              </div>
              <div class="col-2 d-flex flex-column justify-content-center align-items-center">
                <p>{{ \Carbon\Carbon::parse($call['updated_at'])->format('Y-m-d H:i:s') }}</p>
                <h6>{{$call['progres']['progres']}}</h6>
                <button class="btn btn-danger mt-3" {{ $call['order_status'] !== 1 && $call['order_status'] !== 2 ? 'disabled' : '' }}>
                  Batalkan Panggilan
                </button>
              </div>
            </div>
        </div>
      @endforeach
      @endif
      
    </div>
  </div>

@endsection