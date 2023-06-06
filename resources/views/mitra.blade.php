@extends('layout.app')

@section('content')
  <div class="container position-relative p-5 mb-5">
    {{-- SEARCH BAR--}}
      <div class="d-flex justify-content-between mb-3 z-1">
        <div class="col-lg-4 d-inline-flex">
            <h4 class="fw-bold d-flex justify-content-center align-items-center ms-3">Mitra</h4>
        </div>
        <div class="col-lg-4 d-inline-flex me-3"> 
          <form class="d-flex" role="search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Cari Layanan" style="width: 300px">
              <div class="input-group-append"><button class="btn btn-primary"><i class="fas fa-search"></i></button></div>
            </div>
          </form>
        </div>
      </div>  
    {{-- SEARCH BAR--}}
    
    {{-- MITRA --}}
      <div class="container border p-3 mt-3">
        <div class="row">
          @foreach($partners as $partner)
            {{-- Mitra 1 --}}
              <div class="col-3 d-inline-flex mb-5">
                <div class="card shadow" >
                  <img src="http://localhost:5000/api/user/partner/avatar/{{ $partner['id'] }}" alt="">
                  <div class="card-body">
                    <div class="card-container position-relative d-flex justify-content-between mb-3">
                      <h5 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">{{$partner['partner_name']}}</h5>
                      <div class="icon">
                        <a href="{{ route('viewmitra') }}" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                          <i class="fas fa-eye"></i>
                        </a>
                        <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                          <i class="fas fa-comment"></i>
                        </a>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between">
                      <p class="d-inline"><i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp500 M</p>
                      <p class="d-inline">{{ $partner['address']}}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                      {{-- <p class="d-inline text-success"><i class="bi bi-door-open-fill"></i>&nbsp&nbspBuka</p>
                      <p class="d-inline">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p> --}}
                    </div>
                    <button type="button" class="call btn btn-primary w-100 fw-bold mt-3" class="btn btn-primary" data-bs-target="#call{{$partner['id']}}" data-bs-toggle="modal">Panggil</button>
                  </div>
                  
                  <!-- Modal -->
                    <div class="modal fade modal-dialog-scrollable" id="call{{$partner['id']}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">{{ $partner['partner_name']}}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="{{ route('callNow/$id') }}" method="POST">
                              @csrf
                              <h5 class="mb-3">Masalah</h5>
                              <div class="mb-5">
                                <label for="exampleFormControlTextarea1" class="form-label">Masalah Spesifik</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                              </div>
                              <h5 class="mb-3">Alamat</h5>
                              <div class="d-flex mb-3">
                                <button class="btn btn-warning d-inline-flex me-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"><i class="bi bi-geo-fill"></i></button>
                                <textarea class="form-control d-inline-flex" id="exampleFormControlTextarea1" rows="1" disabled readonly></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Alamat lengkap</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"  name="address"></textarea>
                              </div>
                              <div class="d-flex">
                                <button type="submit" class="btn btn-primary mt-3 mb-3 w-100">Panggil</button>
                              </div>
                          </form>
                          </div>
                          <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  {{-- End Modal --}}

                  {{-- Maps Modal --}}
                    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Ini buat maps
                          </div>
                          <div class="modal-footer mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Batal</button>
                            <button type="button" class="btn btn-warning" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Konfirmasi</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  {{-- End Maps Modal --}}
                
                  {{-- Modal Konfirmasi --}}
                    <div class="modal fade" id="konfirmasi{{$partner['id']}}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered" >
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Konfirmasi Panggilan?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <h5 class="mb-3">Masalah</h5>
                            <ul>
                              <li>Minim sopan santun</li>
                              <li>Tidak berakhlak</li>
                              <li>Lainnya : 
                                <br> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam ullam illum rem cumque rerum blanditiis pariatur quas repellat obcaecati!</span>
                              </li>
                            </ul>
                            <h5 class="mb-3 mt-3">Lokasi</h5>
                            <p>Titik Koordinat : 972304hk3qd+=</p>
                            <p>Lokasi Spesifik : 
                              <br> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet, molestiae!</span>
                            </p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Batal</button>
                            <a class="btn btn-primary" onclick="startCall()" href="/call/{{$partner['id']}}">Panggil Sekarang</a>
                          </div>
                        
                        </div>
                      </div>
                    </div>
                  {{-- End Modal Konfirmasi --}}
                </div>
              </div>
            {{-- End Mitra 1 --}}
          @endforeach

          {{-- Mitra 2 --}}
            <div class="col-3 d-inline-flex mb-5">
              <div class="card" >
                <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
                <div class="card-body">
                  <div class="card-container position-relative d-flex justify-content-between mb-3">
                    <h5 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">Service Pikiran Kotor</h5>
                    <div class="icon">
                      <a href="" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                        <i class="fas fa-comment"></i>
                      </a>
                    </div>
                  </div>
                  <div class="detail d-flex justify-content-between">
                      <p class="d-inline">
                          <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp1.2 KM</p>
                      <p class="d-inline">Jl. Kehidupan</p>
                  </div>
                  <div class="detail d-flex justify-content-between">
                    <p class="d-inline text-danger"><i class="bi bi-door-closed-fill"></i>&nbsp&nbspTutup</p>
                    <p class="d-inline">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-half"></i>&nbsp&nbsp4.5
                    </p>
                  </div>
                  <a href="" class="call btn btn-primary mt-3 fw-bold w-100 disabled">Panggil</a>
                </div>
              </div>
            </div>
          {{-- Mitra 2 --}}

          {{-- Mitra 3 --}}
            <div class="col-3 d-inline-flex mx-auto mb-5">
              <div class="card" >
                <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
                <div class="card-body">
                  <div class="card-container position-relative d-flex justify-content-between mb-3">
                    <h5 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">Bengkel Hati & Pikiran</h5>
                    <div class="icon">
                      <a href="" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                        <i class="fas fa-eye"></i>
                      </a>
                      <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                        <i class="fas fa-comment"></i>
                      </a>
                    </div>
                  </div>
                  <div class="detail d-flex justify-content-between">
                    <p class="d-inline">
                      <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp800 M</p>
                    <p class="d-inline">Jl. Kegelapan</p>
                  </div>
                  <div class="detail d-flex justify-content-between">
                    <p class="d-inline text-success"><i class="bi bi-door-open-fill"></i>&nbsp&nbspBuka</p>
                    <p class="d-inline">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>&nbsp&nbsp5.0
                    </p>
                  </div>
                  <a href="" class="call btn btn-primary mt-3 fw-bold w-100">Panggil</a>
                </div>
              </div>
            </div>
          {{-- Mitra 3 --}}
          
          {{-- Mitra 4 --}}
            <div class="col-3 d-inline-flex mb-5">
              <div class="card" >
                <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
                <div class="card-body">
                  <div class="card-container position-relative d-flex justify-content-between mb-3">
                    <h5 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">Bengkel Hati & Pikiran</h5>
                    <div class="icon">
                      <a href="" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                          <i class="fas fa-eye"></i>
                      </a>
                      <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                          <i class="fas fa-comment"></i>
                      </a>
                    </div>
                  </div>
                  <div class="detail d-flex justify-content-between">
                    <p class="d-inline">
                      <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp800 M</p>
                    <p class="d-inline">Jl. Kegelapan</p>
                  </div>
                  <div class="detail d-flex justify-content-between">
                    <p class="d-inline text-success"><i class="bi bi-door-open-fill"></i>&nbsp&nbspBuka</p>
                    <p class="d-inline">
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>
                      <i class="bi bi-star-fill"></i>&nbsp&nbsp5.0
                    </p>
                  </div>
                  <a href="" class="call btn btn-primary mt-3 fw-bold w-100">Panggil</a>
                </div>
              </div>
            </div>
          {{-- END MITRA --}}
        </div>
      </div>
    {{-- MITRA --}}
  </div>  

    {{-- SWEET ALERT --}}
    <script type="text/javascript">
      function startCall() {
        swal({
          title: "Berhasil memanggil",
          text: "Menunggu persetujuan",
          icon: "success",
          button: true
        }).then(function() {
          startCountdown();
          redirectToOtherPage();
        });
      }
    
      function startCountdown() {
        var countdownElement = document.createElement("span");
        countdownElement.setAttribute("id", "countdown");
        document.body.appendChild(countdownElement);
    
        var count = 300;
    
        var countdownInterval = setInterval(function() {
          var minutes = Math.floor(count / 60);
          var seconds = count % 60;
    
          var formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
          var formattedSeconds = seconds < 10 ? "0" + seconds : seconds;
    
          countdownElement.innerHTML = formattedMinutes + ":" + formattedSeconds;
    
          count--;
    
          if (count < 0) {
            clearInterval(countdownInterval);
            countdownElement.innerHTML = "";
          }
        }, 1000);
      }
    
      function redirectToOtherPage() {
        window.location.href = "{{ route('proses') }}";
      }
    </script>

@endsection
