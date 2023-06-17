@extends('layout.app')

@section('content')
    <div class="container py-4 mx-auto">
        {{-- SEARCH BAR --}}
        <div class="d-flex justify-content-between">
            <h4 class="fw-bold">Mitra</h4>
            <div class="d-flex">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-filter-right"></i></span>
                    <input type="text" class="form-control" placeholder="Masukkan Kelurahan" aria-label="Kelurahan"
                        aria-describedby="basic-addon1" id="kelurahan-filter">
                </div>
            </div>
        </div>

        {{-- SEARCH BAR --}}

        {{-- MITRA --}}
        <div class="container p-3 mt-3">
            <div class="row">
                @foreach ($partners as $partner)
                    <div class="col-3 d-inline-flex mb-5">
                        <div class="card card-hover-animation">
                            <div style="width: 1005; height: 100px">
                                <img src="http://localhost:5000/api/admin/partner/avatar/{{ $partner['id'] }}?token={{session('token')}}"style="width: 100%; height: 100%;" alt="">
                            </div>
                            <div class="card-body">
                                <div class="card-container position-relative d-flex justify-content-between mb-3">
                                    <h5 class="d-flex col-lg-6 d-flex justify-content-center align-items-center fw-bold"> {{ $partner['partner_name'] }}</h5>
                                    <div class="icon">
                                        <a href="/viewmitra/{{$partner['id']}}" class="col-lg-12 btn btn-warning d-block-flex my-2 d-flex justify-content-end">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        {{-- <a href="" class="col-lg-12 btn btn-success d-block-flex d-flex justify-content-end">
                                            <i class="bi bi-geo-alt-fill"></i>
                                        </a> --}}
                                    </div>
                                </div>
                                <div class="">
                                    <a href="{{$partner['link_google_map']}}" target="_blank" rel="noopener noreferrer"><i class="bi bi-geo-alt-fill text-dark"></i class="text-dark">&nbsp;&nbsp;{{ $partner['address'] }}</a>
                                    {{-- <p class="d-inline">{{ $partner['address']}}</p> --}}
                                    @if ($partner['operational_status'] == 0)
                                        <p class="text-danger"><i class="bi bi-door-closed-fill"></i>&nbsp;&nbsp;Tutup
                                        </p>
                                    @else
                                        <p class="text-success"><i class="bi bi-door-open-fill"></i>&nbsp;&nbsp;Buka</p>
                                    @endif
                                </div>
                                <div class="d-flex justify-content-between">
                                    {{-- <p class="d-inline"> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p> --}}
                                </div>
                                <button type="button" class="call btn btn-primary w-100 fw-bold mt-3" data-bs-target="#call{{ $partner['id'] }}" data-bs-toggle="modal" {{ $partner['user_id'] === $userData['partner_id'] || $partner['operational_status'] == 0 || session('ordering') != 0 ? 'disabled' : '' }}>Panggil</button>
                            </div>

    <!-- Modal Panggil -->
    <div class="modal fade modal-dialog-scrollable" id="call" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-normal d-flex">Calling
                        <p id="partner_name" class="fw-semibold ms-1"></p>
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="formPanggilPartner">
                    @csrf
                    <div class="modal-body">
                        <div class="d-flex flex-column gap-2">
                            <div class="input-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Masalah" name="message" rows="4"></textarea>
                            </div>

                            <div class="d-flex gap-2">
                                <i class="bi bi-geo-alt-fill text-danger"></i>
                                <p>Lokasi Saya: {{ $geo['geoplugin_city'] }}, {{ $geo['geoplugin_region'] }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary w-100">Panggil
                                Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal --}}

                            {{-- Modal Konfirmasi --}}
                            <div class="modal fade" id="konfirmasi{{ $partner['id'] }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
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
                                                    <br> <span>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                                        Ducimus veniam ullam illum rem cumque rerum blanditiis pariatur
                                                        quas
                                                        repellat obcaecati!</span>
                                                </li>
                                            </ul>
                                            <h5 class="mb-3 mt-3">Lokasi</h5>
                                            <p>Titik Koordinat : 972304hk3qd+=</p>
                                            <p>Lokasi Spesifik :
                                                <br> <span>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                    Eveniet, molestiae!</span>
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-target="#exampleModalToggle"
                                                data-bs-toggle="modal">Batal</button>
                                            <a class="btn btn-primary" onclick="startCall()"
                                                href="/call/{{ $partner['id'] }}">Panggil Sekarang</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- End Modal Konfirmasi --}}
                        
                        </div>
                    </div>
                @endforeach
                {{-- END MITRA --}}
            
            </div>
        </div>
        {{-- MITRA --}}
    </div>



    {{-- SWEET ALERT --}}
    <script>
        function parterModalPanggil(partnerJson) {
            const partner = JSON.parse(partnerJson);
            const title = document.getElementById('partner_name');
            title.textContent = partner.partner_name;
            console.log(partner.id);
            document.getElementById('formPanggilPartner').action = `call/${partner.id}`;
        }

        const searchInput = document.getElementById('kelurahan-filter');
        searchInput.addEventListener('keyup', function() {
            const searchValue = searchInput.value.toLowerCase();
            const cards = document.querySelectorAll('.card');

            cards.forEach(function(card) {
                const village_name = card.querySelector('.village_name').textContent.toLowerCase();

                // Show or hide the card based on the search value
                if (village_name.includes(searchValue)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        function startCall() {
            Swal.fire({
                title: "Sukses memanggil",
                text: "Menunggu persetujuan",
                icon: "success",
                showCancelButton: true,
                cancelButtonText: "Batalkan",
                showConfirmButton: true,
                html: "<h3 id='countdown'></h3>",
                timer: 300000, // 5 menit dalam milidetik (1 detik = 1000 milidetik)
                onOpen: function() {
                    var countdown = document.getElementById('countdown');
                    var timer = setInterval(function() {
                        var minutes = Math.floor((timer.remaining / 1000) / 60);
                        var seconds = Math.floor((timer.remaining / 1000) % 60);
                        countdown.innerHTML = "Sisa waktu: " + minutes + " menit " + seconds + " detik";
                    }, 1000);
                    timer.on('timerComplete', function() {
                        clearInterval(timer);
                        Swal.close();
                    });
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.close();
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    cancelCall();
                }
            });
        }

        function cancelCall() {
            Swal.fire({
                title: "Berhasil dibatalkan",
                icon: "success",
                showConfirmButton: true,
                confirmButtonText: "OK"
            });
        }
    </script>
@endsection
