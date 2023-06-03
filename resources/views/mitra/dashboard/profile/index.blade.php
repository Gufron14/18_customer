@extends('mitra.dashboard.layouts.main')
@section('title', 'Partner')
@section('content')
    <div class="container px-3">
        <div class="card border-0 shadow mb-4">
            <div class="card-header">
                <p class="mb-0">Profil Mitra</p>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="col-12 d-inline-flex mb-3">
                        {{--Banner  --}}
                        <div class="col-6 mb-3">
                            <p>Banner</p>
                            <input type="file" class="form-control">
                        </div>
                        {{-- End Banner --}}

                        {{-- Feed --}}
                        <div class="col-6 mb-3">
                            <p>Feed</p>
                            <input type="file" name="" id="" class="form-control">
                        </div>
                        {{-- End Feed --}}
                    </div>

            {{-- PROFIL --}}
                    <h5 class="mb-3 ms-3">Profil</h5>
                    <div class="col-12 d-inline-flex">
                        {{-- Tentang  --}}
                        <div class="col-6 mb-3">
                            <label for="" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="col-6 mb-3">
                            <label for="" class="form-label">Alamat</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        
                        {{-- End Tentang --}}

                        {{-- Layanan --}}
                        
                        {{-- End Layanan --}}

                        {{-- Kontak --}}

                        {{-- End Kontak --}}
                    </div>
                    <div class="col-6 mb-3 p-3">
                            <label for="" class="form-label">Deskripsi</label>
                            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
                        </div>
            {{-- END PROFIL --}}

                        <div class="float-end me-5 mb-3">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                </form>
                
        </div>
    </script>
@endsection
