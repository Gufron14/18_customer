@extends('layout.app')

@section('content')
    <div class="container p-5 mx-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/mitra">Mitra</a></li>
              <li class="breadcrumb-item active" aria-current="page"> {{ $partner['partner_name'] }} </li>
            </ol>
        </nav>
        <div class="row card shadow">
            <h3 class="card-header fw-bold">{{$partner['partner_name']}}</h3>
            <div class="row card-body">
                <div class="col-3">
                    <img src="{{env('url')}}user/partner/avatar/{{ $partner['id'] }}?token={{session('token')}}" style="width: 100%" class="rounded">
                </div>
                <div class="col">
                    <div class="mb-3">
                        <h5 class="fw-bold">Tentang Kami</h5>
                        <p class="text-justify">{{ $partner['description'] }}</p>  
                    </div>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Nama Perusahaan</td>
                            <td>: &nbsp; {{ $partner['partner_name'] }} </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>: &nbsp;
                                    <a href="{{$partner['link_google_map']}}" target="_blank" rel="noopener noreferrer">{{ $partner['address'] }}</a>                       
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: &nbsp; 
                                    <a href="mailto:{{ $partner['email'] }}" >{{ $partner['email'] }} </a>
                                </td>
                            </tr>                
                            <tr>
                                <td>Nomor Telepon</td>
                                <td>: &nbsp; {{ $partner['phone_number'] }} </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <div>
        </div>
    </div>
    @endsection