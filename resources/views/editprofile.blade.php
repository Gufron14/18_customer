@extends('layout.app')

@section('content')
    <div class="container py-4 mx-auto d-flex justify-content-center">
        <div class="col-xs-12 col-xl-6 py-4">
            <div class="card border-0 shadow">
                <div class="card-body m-3">
                    <h5 class="fw-bold text-center mb-3">Edit Profil</h5>
                    <div class="input">
                        <form action="{{ url('/editProfile') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" id="name" name="username" class="form-control"
                                    placeholder="{{ $user['username'] }}">
                            </div>
                            <div class="mb-3">
                                <label for="nohp" class="form-label">Nomor Handphone</label>
                                <input type="number" id="nohp" name="phone_number" class="form-control"
                                    placeholder="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address" placeholder="""></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Foto Profil</label>
                                <input class="form-control" type="file" id="formFile" name="avatar">
                            </div>
                            <div class="mt-4 d-flex flex-column gap-2 text-center">
                                <button class="btn btn-primary border-0 shadow-sm">Simpan</button>
                                <a class="btn btn-secondary border-0 shadow-sm" href="{{ url('/') }}">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
