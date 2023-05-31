@extends('layout.app')

@section('content')
    <div class="container p-5">
        <form action="">
            <div class="card">
                <div class="card-header mb-3">
                    <h5 class="fw-bold text-center">Daftar untuk menjadi Mitra kami</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" placeholder="Nama Mitra">
                                <label for="partnername">Nama Mitra</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" placeholder="Email Perusahaan">
                                <label for="email">Email Perusahaan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Email Perusahaan">
                                <label for="password">Password</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" placeholder="Email Perusahaan">
                                <label for="password">Konfirmasi Password</label>
                            </div>
                            <div class="">
                                <label for="avatar" class="form-label">Foto Profil Mitra</label>
                                <input type="file" class="form-control">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="row g-3 ms-5">
                                <h5>Alamat</h5>
                                <div class="col-md-12">
                                    <label for="jalan" class="form-label">Nama Jalan/Kampung</label>
                                    <input type="text" class="form-control" id="jalan" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="rt" class="form-label">RT</label>
                                    <input type="text" class="form-control" id="rt" required>
                                </div>
                                <div class="col-md-2">
                                    <label for="rw" class="form-label">RW</label>
                                    <input type="text" class="form-control" id="rw" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="kecamatan" class="form-label">Desa Kelurahan</label>
                                    <input type="text" class="form-control" id="kecamatan" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="kecamatan" class="form-label">Kecamatan</label>
                                    <input type="text" class="form-control" id="kecamatan" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="kodepos" class="form-label">Kode Pos</label>
                                    <input type="text" class="form-control" id="kodepos" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="kota" class="form-label">Kota/Kabupaten</label>
                                    <input type="text" class="form-control" id="kota" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="provinsi" class="form-label">Provinsi</label>
                                    <input type="text" class="form-control" id="provinsi" required>
                                </div>
                                <div class="col-7">
                                    <label for="coordinate" class="form-label">Titik Koordinat</label>
                                    <div class="d-flex mb-3">                           
                                        <button class="btn btn-warning d-inline-flex me-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"><i class="bi bi-geo-fill"></i></button>
                                        <textarea class="form-control d-inline-flex" id="exampleFormControlTextarea1" rows="1" placeholder="pilih dari peta" disabled readonly></textarea>
                                      </div>
        
                                </div>
                                <div class="col-7 mt-5">
                                    <button class="btn btn-primary fw-bold" type="submit">Daftar Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
        </form>
    </div>
@endsection