@extends('layout.app')

@section('content')
    <div class="container p-5 w-50">
        <div class="card">
            <div class="card-body">
                <form action="/register" method="POST" autocomplete="off">
                  @csrf
                    <h3 class="mb-3 text-center fw-bold">Daftar</h3>
                    <div class="mb-3">
                        <label for="username" class="form-label">Nama</label>
                        <input type="text" class="form-control @error('username') is-invalid  @enderror" value="{{old('username')}}" name="username" autofocus required>
                        @error('username')
                            <div class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                      {{$message}}
                    </div> --}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                    </div>
                    <div class="mb-5">
                      <label for="avatar" class="form-label">Foto Profil</label>
                      <input type="file" class="form-control" name="avatar" required>
                    </div>
                    <button type="submit" id="submitData" class="btn btn-primary w-100">Daftar</button>
                </form>
                  <p class="mt-3 text-center">Sudah punya akun?
                    <a href="{{ route('login') }}">Login</a>
                  </p>
            </div>
    </div>
@endsection