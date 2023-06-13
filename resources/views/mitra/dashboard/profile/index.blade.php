@extends('mitra.dashboard.layouts.main')
@section('title', 'Profile')
@section('content')
    <div class="container px-3">
        <form action=" {{ url('/mitra.dashboard.profile.index') }} " method="POST" enctype="multipart/form-data">
        @csrf
            <div class="card border-0 shadow mb-4">
                <div class="card-header  d-flex align-items-center justify-content-between">
                    <p class="mb-0">Profil Mitra</p>
                    <div class="float-end me-5">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 d-inline-flex mb-3">
                            {{--Banner  --}}
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Banner</label>
                                <input type="file" class="form-control">
                            </div>
                            {{-- End Banner --}}

                            {{-- Feed --}}
                            <div class="col-6 mb-3">
                                <label for="" class="form-label">Feed</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            {{-- End Feed --}}
                        </div>
                    </div>
                    <div class="row">
                        <label for="" class="form-label h5 ms-3 mb-3">Profil</label>
                        <div class="col-12 mb-3 d-inline-flex">
                            <div class="col-6 mb-3">
                                <label for="partner_name" class="form-label">Nama Perusahaan</label>
                                <input type="text" id="partner_name" name="partner_name" class="form-control">
                            </div>
                            <div class="col-6 mb-3">
                                <label for="address" class="form-label">Alamat Perusahaan</label>
                                <input type="text" id="address" name="address" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-11 m-2">
                            <label for="" class="form-label">Deskripsi Perusahaan</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
                    </div>
                </div>      
            </div>
        </form>
    
@endsection
