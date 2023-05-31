@extends('layout.app')

@section('content')
    <div class="container d-flex justify-content-center p-5">
        <div class="card w-50">
            <div class="card-body m-3">
                <h5 class="text-center fw-bold mb-3">Ubah Password</h5>
                <div class="col-12">
                    <label for="newpassword" class="form-label">Password Baru</label>
                    <input type="password" id="newpassword" class="form-control mb-3">
                    <label for="confirmpassword" class="form-label">Konfirmasi Password</label>
                    <input type="password" id="confirmpassword" class="form-control">
                </div>
                <div class="mt-3 d-flex float-end">
                    <button class="btn btn-secondary me-2">Batal</button>
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>

@endsection