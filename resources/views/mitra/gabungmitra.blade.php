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
                                    id="nophone" name="nophone" placeholder="No. Telepon (+62)"
                                    value="{{ old('nophone') }}">
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
                            <div class="input-group mb-3">
                                <input type="text" class="form-control @error('affress') is-invalid @enderror"
                                    id="address" name="address" placeholder="Alamat" value="{{ old('address') }}"
                                    required>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-7">


                            <select name="province" id="pilih_provinsi" class="form-select mb-3"
                                aria-label="Default select example">
                                <option value="0" disabled selected>Provinsi</option>
                                @foreach ($provinsis as $provinsi)
                                    <option value="{{ $provinsi['id'] }}">{{ $provinsi['province'] }}</option>
                                @endforeach
                            </select>

                            <select name="city" id="pilih_city" class="form-select mb-3"
                                aria-label="Default select example">
                                <option value="0" disabled selected>Pilih Kabupaten/Kota</option>
                            </select>

                            <select name="district" id="pilih_kecamatan" class="form-select mb-3"
                                aria-label="Default select example">
                                <option>Pilih Kecamatan</option>
                            </select>
                            <select name="village" id="pilih_kelurahan" id="village" class="form-select mb-3"
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
                        </div>
                        <div class="col-xs-12 col-lg-12 mb-2">
                            <div class="">
                                <label for="avatar" class="form-label">Foto Profil</label>
                                <input type="file" class="form-control" name="avatar">
                            </div>
                        </div>
                        <div class="col-xs-12 col-lg-12 my-2">
                            <button class="btn btn-primary fw-bold w-100 rounded-pill border-0 shadow-sm" type="submit"
                                onclick="success()">Daftar
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script>
        $("#pilih_provinsi").on('change', function() {
            var provinsi_id = $(this).val();
            var url = "{{ env('url') }}";
            if (provinsi_id) {
                $.ajax({
                    url: url + "kota/" + provinsi_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var select = $('#pilih_city');
                        select.empty();
                        select.append(
                            '<option value="0" disabled selected>Pilih Kota/Kabupatan</option>');
                        $.each(data.kota, function(key, value) {
                            select.append('<option value="' + value.id + '">' + value.city +
                                '</option>');
                        });
                    }
                });
            } else {
                $('#pilih_city').empty();
            }
        });

        $("#pilih_city").on('change', function() {
            var city_id = $(this).val();
            var url = "{{ env('url') }}";
            if (city_id) {
                $.ajax({
                    url: url + "kecamatan/" + city_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var select = $('#pilih_kecamatan');
                        select.empty();
                        select.append('<option value="0" disabled selected>Pilih Kecamatan</option>');
                        $.each(data.kecamatan, function(key, value) {
                            select.append('<option value="' + value.id + '">' + value.district +
                                '</option>');
                        });
                    }
                });
            } else {
                $('#pilih_kecamatan').empty();
            }
        });

        $("#pilih_kecamatan").on('change', function() {
            var city_id = $(this).val();
            var url = "{{ env('url') }}";
            if (city_id) {
                $.ajax({
                    url: url + "kelurahan/" + city_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var select = $('#pilih_kelurahan');
                        console.log(data);
                        select.empty();
                        select.append(
                            '<option value="0" disabled selected>Pilih Kelurahan/Desa</option>');
                        $.each(data.kelurahan, function(key, value) {
                            select.append('<option value="' + value.id + '">' + value.village +
                                '</option>');
                        });
                    }
                });
            } else {
                $('#pilih_kelurahan').empty();
            }
        });



        function succes() {
            Swal.fire({
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
