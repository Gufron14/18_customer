@extends('mitra.dashboard.layouts.main')
@section('title', 'Customer')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Partner List</h1> --}}

        <!-- DataTales Example -->
        <div class="card border-0 shadow mb-4">
            <div class="card-header">
                <p class="mb-0">Aktivasi Akun Mitra</p>
            </div>
            <div class="card-body d-inline-flex">   
                {{-- Paket 1 Bulan --}}
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Paket 1 Bulan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 250.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                {{-- End  --}}

                {{-- Paket 6 Bulan --}}
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Paket 6 Bulan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 500.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                {{-- End  --}}

                {{-- Paket 6 Bulan --}}
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-danger shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Paket 12 Bulan</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 800.000</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                 {{-- End  --}}
            </div>

            <div class="container">
                <div class="mt-3">
                    <p class="mb-3 text-danger">Mohon lakukan pembayaran untuk aktivasi Akun Mitra!</p>
                    <p>Formulir Pembayaran</p>
                    <form action="">
                        <label for="partnername">Nama Mitra</label>
                        <input class="form-control mb-3" type="text" value="{{ $partner['partner_name'] }}" aria-label="Disabled input example" disabled readonly>
                        <div class="form-group">
                            <select name="" id="selectOption" class="form-select" required>
                                <option value="">-- Pilih Paket --</option>
                                <option value="1 Bulan">1 Bulan</option>
                                <option value="6 Bulan">6 Bulan</option>
                                <option value="12 Bulan">12 Bulan</option>
                            </select>
                            <div class="invalid-feedback">Mohon pilih salah satu Paket</div>
                        </div>
                        <div class="mb-5 mt-5">
                            <button type="submit" class="btn btn-primary" onclick="showModal()">Kirim</button>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Pembayaran</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-bordered">
                                        <thead class="bg-light">
                                            <th>Bank</th>
                                            <th>Nomor Rekening</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>BRI</td>
                                                <td>1234567890981272</td>
                                            </tr>
                                            <tr>
                                                <td>BCA</td>
                                                <td>84360378467943876</td>
                                            </tr>
                                            <tr>
                                                <td>Dana</td>
                                                <td>0899328457823</td>
                                            </tr>
                                            <tr>
                                                <td>Shoppepay</td>
                                                <td>1234567890981272</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-5">
                                        <label for="bukti" class="form-label">Upload Bukti Pembayaran</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary"">Kirim</button>
                                </div>
                            </div>
                            </div>
                        </div>

                    </form>

                </div>
                
            </div>
        </div>
    </div>

    <script>
        function showModal() {
            var selectOption = document.getElementById('selectOption');
            if (!selectOption.value) {
                selectOption.classList.add('is-invalid');
            } else {
                selectOption.classList.remove('is-invalid');
                $('#myModal').modal('show');
            }
        }
    </script>

@endsection
