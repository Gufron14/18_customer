@extends('layout.app')

@section('content')

    <div class="container p-5">
        <div class="row">
            <div class="col">
              <div class="d-flex justify-content-center align-items-center mt-5">
                <img src="{{ asset ('assets/img/cs.png') }}" alt="" style="width: 60%">
              </div>
            </div>
            <div class="col m-5">
                <div class="card w-75">
                    <div class="card-body">
                      <form action="/login" method="POST" autocomplete="off">
                        @csrf
                            <h2 class="mb-3 text-center fw-bold">Login</h2>
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                            </div>
                            <div class="mb-3 text-danger">
                              {{$message}}
                            </div>
                            <button type="submit" class="btn btn-primary fw-bold w-100">Login</button>
                          </form>
                          <p class="mt-3 text-center">Belum punya akun?
                            <a href="{{ route('register') }}">Daftar</a>
                          </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
      <script>
          // Menampilkan pemberitahuan dengan SweetAlert
          Swal.fire({
              icon: 'success',
              title: 'Berhasil!',
              text: "{{ session('success') }}",
          });
      </script>
    @endif

@endsection