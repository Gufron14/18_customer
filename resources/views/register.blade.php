@extends('layout.app')

@section('content')
    <div class="container p-5 w-50">
        <div class="card">
            <div class="card-body">
                <form action="/register" method="POST" autocomplete="off">
                  @csrf
                    <h2 class="mb-3 text-center fw-bold">Daftar</h2>
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div>
                      {{$message['username'][0]}}
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div>
                      {{$message['email'][0]}}
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div>
                      {{$message['password'][0]}}
                    </div>
                    <div class="form-group files mb-3">
                        <label class="mb-3">Upload Foto Kamu</label>
                        <input type="file" class="form-control" multiple="" name="avatar"> 
                      </div>
                    <button type="submit" id="submitData" class="btn btn-primary w-100">Daftar</button>
                  </form>
                  <p class="mt-3 text-center">Sudah punya akun?
                    <a href="{{ route('login') }}">Login</a>
                  </p>
            </div>
    </div>
@endsection