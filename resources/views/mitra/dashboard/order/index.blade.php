@extends('mitra.dashboard.layouts.main')
@section('title', 'Pesanan')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Partner List</h1> --}}

    <!-- DataTales Example -->
    <div class="card border-0 shadow mb-4">
        <div class="card-header">
            <p class="mb-0">Pesanan Masuk</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Coordinate</th>
                            <th>Problems</th>
                            <th>Time</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)
                        <tr>
                            <td>{{$order['id']}}</td>
                            <td>{{$order['user']['username']}}</td>
                            <td>Ini lokasi</td>
                            <td>unknown coordinate</td>
                            <td>{{$order['message']}}</td>
                            <td>{{$order['created_at']}}</td>
                            <td class="d-inline-flex">
                                <button class="btn btn-success me-2"><i class="fas fa-thumbs-up"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td>1</td>
                            <td>Gufron</td>
                            <td>Bandung</td>
                            <td>unknown coordinate</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptatem a minima nesciunt quasi itaque possimus blanditiis totam porro beatae?</td>
                            <td>14.38.58</td>
                            <td class="d-inline-flex">
                                <button class="btn btn-success me-2"><i class="fas fa-thumbs-up"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-times"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Gufron</td>
                            <td>Bandung</td>
                            <td>unknown coordinate</td>
                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptatem a minima nesciunt quasi itaque possimus blanditiis totam porro beatae?</td>
                            <td>14.38.58</td>
                            <td class="fst-italic">Finished</td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
