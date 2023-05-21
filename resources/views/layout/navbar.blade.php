<nav class="navbar navbar-expand-lg navbar-expand-sm navbar-dark bg-dark">
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
                    <a href="gabungmitra" class="nav-link">Gabung Mitra</a>
                </li>
                <li class="nav-item dropdown">
                  <div class="dropdown">
                    <div class="circle">
                      <img src="{{ asset ('assets/img/formal.png') }}" alt="">
                    </div>
                    <div class="dropdown-content">
                      <a class="dropdown-item" href="#">Dashboard</a>
                      <a class="dropdown-item" href="#">Edit Profile</a>
                      <a class="dropdown-item" href="#">Log Out</a>
                    </div>
                  </div>
                </li>   
              </ul>
        </div>
      </div>
    </div>
  </nav>

  