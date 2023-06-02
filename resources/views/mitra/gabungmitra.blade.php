@extends('layout.app')

@section('content')
    <div class="container p-5">
        <form action="/gabungmitra" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header mb-3">
                    <h5 class="fw-bold text-center">Daftar untuk menjadi Mitra kami</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('partnername') is-invalid @enderror" id="name" name="partnername" placeholder="Nama Mitra" value="{{ old('partnername') }}">
                                <label for="partnername">Nama Mitra</label>
                                @error('partnername')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Perusahaan" value="{{ old('email') }}">
                                <label for="email">Email Perusahaan</label>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('nophone') is-invalid @enderror" id="nophone" name="nophone" placeholder="No. Telepon" value="{{ old('nophone') }}">
                                <label for="nophone">No. Telepon</label>
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
                            <div class="">
                                <label for="avatar" class="form-label">Foto Profil Mitra</label>
                                <input type="file" class="form-control" name="avatar">
                            </div>
                        </div>
                        <div class="col-7">
                            <div class="row g-3 ms-5">
                                <h5>Alamat</h5>
                                <div class="col-md-12">
                                    <label for="address" class="form-label">Alamat</label>
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" value="{{ old('address') }}" required>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-2">
                                    <textarea name="desc" id="desc" rows="3" class="form-control" style="width: 500px;"></textarea>
                                </div>
                            </div>
                            <div class="col-7 mt-5">
                                <button class="btn btn-primary fw-bold" type="submit" onclick="success()">Daftar Sekarang</button>
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
