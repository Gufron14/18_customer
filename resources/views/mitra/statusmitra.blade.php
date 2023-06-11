@extends('layout.app')

@section('content')
    <div class="container p-5">
        <div class="card">
            <div class="card-header bg-success text-white fw-bold">
                Informasi Akun Mitra
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <td>Nama Perusahaan</td>
                        <td>{{ $partner['partner_name'] }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>{{ $partner['address'] }}</td>
                    </tr>
                    <tr>
                        <td>Deskripsi Perusahaan</td>
                        <td>{{ $partner['description'] }}</td>
                    </tr>
                    <tr>
                        <td>Status Akun</td>
                        <td>{{ $partner['account_status']== 0? 'Permintaan sedang diproses' : 'Permintaan telah disetujui'}}</td>
                    </tr>
                </table>
                <div class="">
                    <div class="col-6">
                        {{-- <p>Catatan : <br>
                            Segera lakukan pembayaran untuk membuka jasa pada platfrom kami!.</p> --}}
                    </div>
                    <div class="col-6 d-flex justify-content-end align-items-center">
                        {{-- <button class="btn btn-primary float-end me-5 w-50 fw-bold">Buka Jasa</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
    <script>
        // Menampilkan pemberitahuan dengan SweetAlert
        Swal.fire({
            icon: 'success',
            title: 'Berhasil Mendaftar!',
            text: '{{ session("success") }}',
        });
    </script>
    @endif

@endsection