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
        <div class="d-flex row justify-content-center gy-1 gap-3 my-3 mx-2">
            @foreach ($partners as $partner)
                <div class="col-1 col-sm-4 col-lg-3 col-xl-3 card shadow border-0 px-0 card-hover-animation">
                    <div style="height: 200px">
                        <img src="http://localhost:5000/api/admin/partner/avatar/{{ $partner['id'] }}?token={{ session('token') }}"style="width: 100%; height: 100%; object-fit: cover;"
                            alt="">
                    </div>
                    <div class="card-body px-4">
                        <div class="d-flex justify-content-between mb-3">
                            <p class="my-auto fw-semibold">{{ $partner['partner_name'] }}</p>
                            <a href="/viewmitra/{{ $partner['id'] }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                        <div class="d-flex gap-2">
                            <i class="bi bi-geo-alt-fill text-dark"></i class="text-dark">
                            <a href="{{ $partner['link_google_map'] }}" target="_blank"
                                rel="noopener noreferrer">{{ $partner['address'] }}</a>
                        </div>
                        <div class="d-flex gap-2">
                            @if ($partner['operational_status'] == 0)
                                <i class="bi bi-door-closed-fill text-danger"></i>
                                <p class="text-danger">Tutup</p>
                            @else
                                <i class="bi bi-door-open-fill text-success"></i>
                                <p class="text-success">Buka</p>
                            @endif
                        </div>
                        <p style="display: none" class="village_name">{{ $partner['village']['village'] }}</p>

                        <div class="d-flex justify-content-between">
                            {{-- <p class="d-inline"> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-fill"></i> <i class="bi bi-star-half"></i>&nbsp&nbsp4.5</p> --}}
                        </div>
                        <button type="button" class="call btn btn-primary w-100 fw-bold mt-3" data-bs-target="#call"
                            data-bs-toggle="modal" onclick="parterModalPanggil('{{ json_encode($partner) }}')"
                            {{ $partner['user_id'] === session('user') || $partner['operational_status'] == 0 || session('ordering') != 0 ? 'disabled' : '' }}>Panggil</button>
                    </div>
                </div>
            @endforeach
            {{-- END MITRA --}}

        </div>
        {{-- MITRA --}}
    </div>

    <!-- Modal Panggil -->
    <div class="modal fade modal-dialog-scrollable" id="call" aria-hidden="true"
        aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 fw-bold" id="partner_name" id="">
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="#" method="POST" id="formPanggilPartner">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Masalah
                                Spesifik</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="4"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat
                                lengkap</label>
                            <div class="mb-3 d-block-flex">
                                <a href="" class="btn btn-warning">
                                    <i class="bi bi-geo-alt-fill"></i>
                                </a>
                                <label for="" class="form-label">Pilih dari Maps</label>
                            </div>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="address"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <div class="d-flex">
                            <button type="submit" class="btn btn-primary mt-3 mb-3 w-100">Panggil
                                Sekarang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal --}}



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
