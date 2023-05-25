@extends('layout.app')

@section('content')
    
    <div class="container p-5">
        <h3 class="mb-5 fw-bold text-center">Daftar untuk menjadi Mitra Kami</h3>
        <div class="card">
            <div class="card-body">
                <div class="col-4 d-flex d-inline-flex justify-content-center align-items-center p-5">
                    <div class="d-block" style="width: 400px">
                        <div class="mb-3">
                            <input class="form-control form-control mb-3" type="text" id="partnername" placeholder="Nama Mitra">
                        </div>
            
                        <div class="mb-3">
                            <input class="form-control form-control mb-3" type="email" id="email" placeholder="Email">
                        </div>
            
                        <div class="mb-3">
                            <input class="form-control form-control mb-3" type="password" id="password" placeholder="Password">
                        </div>
                        
                        <div class="mb-3">
                            <input class="form-control form-control mb-3" type="password" id="confirmpassword" placeholder="Password">
                        </div>
                        
                    </div>
                </div>
                <div class="col-6 d-flex d-inline-flex p-5">
                   <div class="d-block">
                        <div class="mb-3">
                            <input class="form-control form-control mb-3" type="text" id="adsress" placeholder="Alamat">
                            <div id="address" class="form-text">
                                Alamat berupa Jalan, RT, RW, Nomor Rumah, Kelurahan, Kecamatan, dan Kab/Kota
                              </div>
                        </div>
                        <div class="mb-3">
                            <input class="form-control form-control mb-3" type="text" id="coordinate" placeholder="Titik Koordinat">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" name="desc" id="desc" cols="60" rows="5" placeholder="Deskripsi Mitra"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label">Upload Gambar</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>

                <div class="d-block d-flex justify-content-center align-items-center mx-auto p-5">
                    <button class="btn btn-primary fw-bold">Daftar Sekarang</button>
                </div>
            </div>
        </div>
    </div>
@endsection