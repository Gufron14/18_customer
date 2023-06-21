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
                                <input type="text" id="name" name="username" class="form-control mb-3"
                                    placeholder="{{ $user['username'] }}">
                                <div class="mb-3">
                                    <label for="nohp" class="form-label">Nomor Handphone (+62)</label>
                                    <div class="d-flex justify-content-between gap-2">
                                        <div class="col-3 col-sm-2 col-md-2 col-lg-2 my-0">
                                            <input type="text" value="+62" class="bg-white form-control" disabled>
                                        </div>
                                        <div class="col-9 col-sm-10 col-md-10 col-lg-10 my-0">
                                            <input type="text" id="nohp" name="no_phone" onchange="(phone())"
                                                class="form-control"
                                                placeholder="{{ str_replace('+62', '', $user['no_phone']) }}
                                                ">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Foto Profil</label>
                                    <input class="form-control" type="file" id="formFile" name="avatar">
                                </div>
                            </div>
                    </div>

                    <div class="mt-5 text-center">
                        <button class="btn btn-secondary me-2">Batal</button>
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
