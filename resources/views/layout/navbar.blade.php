<?php
  use GuzzleHttp\Client;
  if(session('token')){
    $client = new Client(['headers' => [
    'Authorization' => 'Bearer '.session('token')
  ]]);
  $uResponse = $client->request('GET', "http://localhost:5000/api/user/me");
  $uBody = $uResponse->getBody()->getContents();
  $uData = json_decode($uBody, true);
  extract($uData);
  $sesi = session()->put('role', $uData['user']['role']);
  $sesi = session()->put('ordering', $uData['user']['ordering']);
  }else{

  }
  
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container p-5">
      <img src="{{ asset ('assets/img/logo.png') }}" alt="" style="width: 8%">
      <a class="navbar-brand  text-white fw-bold" href="#">Job Calling</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item {{ Request::path() == 'mitra' ? 'active' : '' }}">
                    <a href="mitra" class="nav-link">Mitra</a>
                </li>
                <li class="nav-item {{ Request::path() == 'proses' ? 'active' : '' }}">
                    <a href="proses" class="nav-link">Proses</a>
                </li>
                <li class="nav-item {{ Request::path() == 'riwayat' ? 'active' : '' }}">
                    <a href="riwayat" class="nav-link">Riwayat</a>
                </li>
                <li class="nav-item {{ Request::path() == 'gabungmitra' ? 'active' : '' }}">
                  @if (session('role') == 0)
                  <a href="gabungmitra" class="nav-link">Gabung Mitra</a>

                    @else
                        
                    <a href="statusmitra" class="nav-link">Toko Saya</a>
                    @endif
                </li>

              

                {{-- Profile --}}

                @if(session('token'))

                {{-- NOTIFIKASI --}}
                <div class="notif-bg d-flex align-items-center me-3">
                  <div class="container d-flex justify-content-center">

                    {{-- Notifikasi --}}
                    <i class="notif-icon bi bi-bell-fill" data-bs-toggle="dropdown" aria-expanded="false"></i>
                    <div class="dropstart" >
                      <ul class="dropdown-menu" style="width: 500px;" style="overflow: hidden;">
                        <li class="dropdown-item mb-3">
                          <a href="{{ route('mitra') }}" class="d-flex align-items-center">
                            <div class="avatar me-3">
                              <img class="" src="{{ asset('assets/img/logo.png') }}" alt="">
                            </div>
                            <strong class="text-truncated" style="white-space: nowrap; text-overflow: ellipsis;">Job Calling</strong>&nbsp;
                            <span class="text-truncate">&nbsp;Selamat! Anda berhasil membuat akun Mitra. Segera Aktivasi untuk menjalankan Bisnis dengan Job Calling.</span>   
                          </a>
                        </li>
                      </ul>
                    </div>
                    {{-- End Notifikasi --}}

                  </div>
                </div>
               {{-- END NOTIFIKASI  --}}

                <li class="nav-item">
                  <div class="dropdown z-3">
                    <div class="avatar">
                      @if($uData['user']['avatar'])
                        <img src="http://localhost:5000/api/user/avatar?token={{session('token')}}" alt="">
                      @else
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                      </svg>
                      @endif
                    </div>
                    <div class="dropdown-content z-3">
                      <a class="dropdown-item" href="{{ route('editprofile') }}">Edit Profile</a>
                      <a class="dropdown-item" href="{{ route('ubahpassword') }}">Change Password</a>
                      <a class="dropdown-item" href="/logout">Log Out</a>
                    </div>
                  </div>
                </li>  
                @else
                @endif
                 
                {{-- End Profile --}}
                
              </ul> 
        </div>
      </div>
    </div>
  </nav>



  