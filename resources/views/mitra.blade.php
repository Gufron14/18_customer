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
        <div class="col-4 d-inline-flex mb-5">
          {{-- @foreach ($partners as $partner) --}}
          <div class="card shadow" >
              <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
              <div class="card-body">
                  <div class="card-container position-relative d-flex justify-content-between mb-3">
                      <h5 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold">{{ $partner['partner_name'] }}</h5>
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
                      <p class="d-inline">
                          <i class="bi bi-geo-alt-fill"></i>&nbsp&nbsp500 M</p>
                      <p class="d-inline">{{ $partner['address']}}</p>
                  </div>
                  <div class="d-flex justify-content-between">
                      <p class="d-inline text-success"><i class="bi bi-door-open-fill"></i>&nbsp;&nbsp;{{$partner['operational_status']}}</p>
                      <p class="d-inline">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p>
                  </div>

                 
                  <button type="button" class="call btn btn-primary w-100 fw-bold mt-3" class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Panggil</button>
          {{-- @endforeach --}}
                  <!-- Modal -->
                  <div class="modal fade modal-dialog-scrollable" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5 fw-bold" id="exampleModalToggleLabel">Jasa Perbaiki Akhlak</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <div class="mb-5">
                              <label for="exampleFormControlTextarea1" class="form-label">Masalah Spesifik</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="jelaskan masalahmu dengan lengkap"></textarea>
                            </div>
                          
                            <h5 class="mb-3">Alamat</h5>
                            <div class="d-flex mb-3">
                              <button class="btn btn-warning d-inline-flex me-3" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"><i class="bi bi-geo-fill"></i></button>
                              <textarea class="form-control d-inline-flex" id="exampleFormControlTextarea1" rows="1" disabled readonly></textarea>
                            </div>

                            <div class="mb-3">
                              <label for="exampleFormControlTextarea1" class="form-label">Alamat lengkap</label>
                              <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                            </div>

                            <div class="d-flex">
                              <button class="btn btn-primary mt-3 mb-3 w-100" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Konfirmasi Permasalahan</button>
                            </div>

                          </div>

                          <div class="modal-footer mt-3">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            </div>
                        </div>
                      </div>
                    </div>
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
                      {{-- End Maps Modal --}}
                    </div>
                  {{-- End Modal --}}

                  {{-- Modal Konfirmasi --}}
                  <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
                      <div class="modal-dialog modal-dialog-centered" >
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Konfirmasi Panggilan?</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <ul>
                              <li>
                                <h5>Masalah</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit assumenda illo repellendus, reprehenderit maxime vitae et molestias totam nisi aperiam!</p>
                              </li>
                              <li>
                                <h5>Alamat/lokasi</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                              </li>
                            </ul>
                          </div>
                          <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Batal</button>
                            <button class="btn btn-primary" onclick="startCall()">Panggil Sekarang</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  {{-- End Modal Konfirmasi --}}
              </div>
            </div>
            
      </div>
      {{-- End Mitra 1 --}}
      
          

        {{-- END MITRA --}}
      </div>
        </div>
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
