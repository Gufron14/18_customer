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
                    <a href="gabungmitra" class="nav-link">Gabung Mitra</a>
                </li>

                {{-- Notifications Icon --}}
                <div class="notif-bg d-flex align-items-center me-3">
                  <div class="container d-flex justify-content-center">
                    <div class="dropstart">
                      <i class="notif-icon bi bi-bell-fill me-3 position-relative" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="badge position-absolute top-0 start-100 translate-middle bg-danger">
                          4
                          <span class="visually-hidden">unread messages</span>
                        </span>
                      </i>
                      <ul class="dropdown-menu shadow " style="width: 400px">
                        <li>
                          <h6 class="m-3">Notifikasi</h6>
                          <hr class="m-3">
                        </li>
                        <li>
                          <a class="dropdown-item" href="#" class="position-relative">
                            <div class="row flex-row d-flex align-items-center">
                              <div class="col-2  d-inline-flex">
                                <img src="{{ asset ('assets/img/formal.png') }}" class="rounded" alt="" style="width: 40px; height: 50px;">
                              </div>
                              <div class="col-4 d-inline-flex d-flex flex-column">
                                <h6 class="fw-bold">Gufron Nurjalil</h6>
                                <p class="text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolore necessitatibus quas facere iure culpa sint tempore voluptatem magnam adipisci.</p>
                              </div>
                            </div>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#" class="position-relative">
                            <div class="row flex-row d-flex align-items-center">
                              <div class="col-2  d-inline-flex">
                                <img src="{{ asset ('assets/img/formal.png') }}" class="rounded" alt="" style="width: 40px; height: 50px;">
                              </div>
                              <div class="col-4 d-inline-flex d-flex flex-column">
                                <h6 class="fw-bold">Ferdy Hahan</h6>
                                <p class="text-truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem dolore necessitatibus quas facere iure culpa sint tempore voluptatem magnam adipisci.</p>
                              </div>
                            </div>
                          </a>
                        </li>
                      </ul>
                      <i class="notif-icon bi bi-question-circle-fill" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>
                      {{-- help modal --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5 text-primary" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body text-secondary">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, porro! Magnam eaque exercitationem eius quaerat est, nulla laborum iste sint.
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                      </div>
                    </div>  
                  </div>
                </div>
                {{-- end help modal --}} 
                    </div>
                  </div>
                </div>

                
                
                {{-- End Notifications Icon --}}

                {{-- Profile --}}

                <li class="nav-item">
                  <div class="dropdown z-3">
                    <div class="avatar">
                      <img src="{{ asset ('assets/img/formal.png') }}" alt="">
                    </div>
                    <div class="dropdown-content z-3">
                      <a class="dropdown-item" href="{{ route('editprofile') }}">Edit Profile</a>
                      <a class="dropdown-item" href="{{ route('ubahpassword') }}">Change Password</a>
                      <a class="dropdown-item" href="/logout">Log Out</a>
                    
                    </div>
                  </div>
                </li>   
              </ul>
              
        </div>
      </div>
    </div>
  </nav>



  