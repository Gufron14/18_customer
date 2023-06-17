@extends('layout.app')

@section('content')
    <div class="container p-5 d-flex justify-content-center align-items-center">
            <div class="card w-50">
                <div class="card-body m-3">
                    <h5 class="fw-bold text-center mb-3">Edit Profil</h5>
                    <form action="{{ url('/editProfile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" id="name" name="username" class="form-control mb-3" placeholder="{{ $user['username'] }}">
                                <label for="nohp" class="form-label">Nomor Handphone (+62)</label>
                                <input type="text" id="nohp" name="no_phone" class="form-control mb-3" placeholder="{{ $user['no_phone'] }}">
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
@endsection