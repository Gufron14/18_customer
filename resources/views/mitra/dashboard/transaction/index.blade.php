@extends('mitra.dashboard.layouts.main')
@section('title', 'Transaction')
@section('content')
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card border-0 shadow mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between py-auto">
                    <p class="my-auto">Transaction List</p>
                    <div class="btn btn-primary btn-sm px-4 border-0 shadow-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</div>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row btn-group p-3" role="group" aria-label="Basic radio toggle button group">
                                            <input type="radio" class="btn-check" name="options" id="1" onclick="chooseOption(1)" autocomplete="off">
                                            <label class="btn btn-secondary" for="1">
                                                <div class="row">
                                                    <div class="col text-start">Paket 1 Bulan</div>
                                                    <div class="col-4 text-start">Rp. 500.000</div>
                                                </div>
                                            </label>
                                            <input type="radio" class="btn-check" name="options" id="2" onclick="chooseOption(2)" autocomplete="off">
                                            <label class="btn btn-secondary" for="2">
                                                <div class="row">
                                                    <div class="col text-start">Paket 3 Bulan</div>
                                                    <div class="col-4 text-start">Rp. 1.250.000</div>
                                                </div>
                                            </label>
                                            <input type="radio" class="btn-check" name="options" id="3" onclick="chooseOption(3)" autocomplete="off">
                                            <label class="btn btn-secondary" for="3">
                                                <div class="row">
                                                    <div class="col text-start">Paket 6 Bulan</div>
                                                    <div class="col-4 text-start">Rp. 2.500.000</div>
                                                </div>
                                            </label>
                                            <input type="radio" class="btn-check" name="options" id="4" onclick="chooseOption(4)" autocomplete="off">
                                            <label class="btn btn-secondary" for="4">
                                                <div class="row">
                                                    <div class="col text-start">Paket 1 tahun</div>
                                                    <div class="col-4 text-start">Rp. 5.000.000</div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                                        <button type="button" class="btn btn-primary" onclick="openModal2()">lanjutkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModal1Label" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModal1Label">Konfirmasi</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" data-bs-target="#exampleModal" aria-label="Close"></button>
                                </div>
                                <form action="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>Paket</td>
                                                    <td id="packageInput"></td>
                                                </tr>
                                                <tr>
                                                    <td>Harga</td>
                                                    <td id="price"></td>
                                                </tr>
                                                <tr>
                                                    <td>Pilih tanggal mulai</td>
                                                    <td id="price"><input type="date"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" onclick="closeModal2()" data-bs-dismiss="modal" data-bs-target="#exampleModal1" >Close</button>
                                        <button type="button" class="btn btn-primary">lanjutkan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Sub Price</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                use Faker\Factory as Faker;
                                use Carbon\Carbon;
                                
                                $faker = Faker::create('id_ID');
                                $transactions = [];
                                for ($i = 1; $i <= 100; $i++) {
                                    $created_at = Carbon::now();
                                    $quantity = random_int(1, 30);
                                    $subPrice = 20000;
                                
                                    $transactions[] = [
                                        'created_at' => $created_at,
                                        'quantity' => $quantity,
                                        'subPrice' => $subPrice,
                                        'price' => $quantity * $subPrice,
                                    ];
                                }
                            @endphp
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction['created_at'] }}</td>
                                    <td>{{ $transaction['quantity'] }}</td>
                                    <td>@toRP($transaction['subPrice'])</td>
                                    <td>@toRP($transaction['price'])</td>
                                    <td class="text-center">
                                        <div class="btn btn-sm btn-primary btn-icon shadow-sm">Detail</div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        function openModal2() {
            $('#exampleModal1').modal('show');
            $('#exampleModal').modal('hide');
        }

        function closeModal2() {
            $('#exampleModal1').modal('hide');
            $('#exampleModal').modal('show');
        }
        function chooseOption(id) {
            switch(id){
                case 1 : 
                    document.getElementById('packageInput').innerHTML = "1 Bulan";
                    document.getElementById('price').innerHTML = "500000";
                    break;
                case 2 :
                    document.getElementById('packageInput').innerHTML = "3 Bulan";
                    document.getElementById('price').innerHTML = "1500000";
                    break;
                case 3 :
                    document.getElementById('packageInput').innerHTML = "6 Bulan";
                    document.getElementById('price').innerHTML = "3000000";
                    break;
                case 4:
                    document.getElementById('packageInput').innerHTML = "1 Tahun";
                    document.getElementById('price').innerHTML = "6000000";
                    break;
            }
            

            // now you can access properties of the partner object like this:

            // console.log(partner.id);
            

        }
    </script>
@endsection
