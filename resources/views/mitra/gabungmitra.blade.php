@extends('layout.app')

@section('content')
    <div class="container py-3 mx-auto">
        <h5 class="fw-bold text-center mt-3 mb-4">Daftar untuk menjadi Mitra kami</h5>
        <form action="/gabungmitra" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card mb-5">
                <div class="card-body">
                    <div class="row justify-content-center p-3">
                        <div class="col-xs-12 col-lg-5">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('partnername') is-invalid @enderror"
                                    id="name" name="partnername" placeholder="Nama Mitra"
                                    value="{{ old('partnername') }}">
                                @error('partnername')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" name="email" placeholder="Email Perusahaan"
                                    value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('nophone') is-invalid @enderror"
                                    id="nophone" name="nophone" placeholder="No. Telepon" value="{{ old('nophone') }}">
                                @error('nophone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <select name="category" class="form-select mb-3" aria-label="Default select example">
                                <option selected>Kategori</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['category_name'] }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-7">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('affress') is-invalid @enderror"
                                    id="address" name="address" placeholder="Alamat" value="{{ old('address') }}"
                                    required>
                                <label for="address">Alamat</label>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-7">
                            <select name="province" id="province" onclick="getCity()" class="form-select mb-3"
                                aria-label="Default select example">
                                <option>Pilih Provinsi</option>
                            </select>
                            <select name="city" id="city" onclick="getDistrict()" class="form-select mb-3"
                                aria-label="Default select example">
                                <option>Pilih Kota / Kabupaten</option>
                            </select>
                            <select name="district" id="district" onclick="getVillage()" class="form-select mb-3"
                                aria-label="Default select example">
                                <option>Pilih Kecamatan</option>
                            </select>
                            <select name="village" id="village" class="form-select mb-3"
                                aria-label="Default select example">
                                <option>Pilih Kelurahan / Desa</option>
                            </select>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('affress') is-invalid @enderror"
                                    id="gmap" name="gmap" placeholder="Link Google Map" value="{{ old('gmap') }}"
                                    required>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12 mb-2">
                            <div class="input-group">
                                <textarea name="desc" id="desc" rows="2" class="form-control" placeholder="Deskripsi"></textarea>
                            </div>
                            <div class="">
                                <label for="avatar" class="form-label">Foto Profil Mitra</label>
                                <input type="file" class="form-control" name="avatar">
                            </div>
                            <div class="col-7 mt-5 mb-3">
                                <button class="btn btn-primary fw-bold" type="submit" onclick="success()">Daftar
                                    Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function succes() {
            swal({
                title: "Berhasil membuat Akun Mitra",
                text: "Mohon tunggu beberapa saat",
                icon: "success",
                button: true
            });

            setTimeout(function() {
                window.location.href = "{{ route('statusmitra') }}";
            }, 3000);
        }
    </script>
@endsection
