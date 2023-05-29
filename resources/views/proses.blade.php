@extends('layout.app')

@section('content')
    <div class="container border p-5">
        <div class="row mb-3 m-3">
                <div class="card">
                    <div class="card-body d-flex flex-row">
                        <div class="col-4 d-flex d-inline-flex">
                            <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
                        </div>
                        <div class="col-4 d-inline-flex d-flex flex-column ms-3">
                            <div class="d-flex">Jasa Perbaiki Akhlak</div>
                            <h4 class="fw-bold d-block-flex">Kekurangan Akhlak</h4>
                            <div class="d-flex">Saya kekurangan akhlak dan etika yang mana ketika saya sedang maen mobile legends bersama pak ustadz saya sampah maniacnya</div>
                        </div>
                        <div class="col-4 text-center mt-3">
                            <h6>Menunggu persetujuan</h6>
                            <h1 id="countdown" class="fw-bold"></h1>
                            
                            <button class="btn btn-danger mt-3">
                                Batalkan Panggilan
                            </button>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  var countdownInterval;

  function countdown() {
    var countdownElement = document.getElementById("countdown");
    var count = 5;

    countdownInterval = setInterval(function() {
      var minutes = Math.floor(count / 60);
      var seconds = count % 60;

      var formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
      var formattedSeconds = seconds < 10 ? "0" + seconds : seconds;

      countdownElement.innerHTML = formattedMinutes + " menit " + formattedSeconds + " detik";

      count--;

      if (count < 0) {
        clearInterval(countdownInterval);
        countdownElement.innerHTML = "";

        Swal.fire({
          icon: 'error',
          title: 'Waktu Habis',
          text: 'Tidak ada jawaban.',
          showCancelButton: true,
          confirmButtonText: 'Panggil Kembali',
          cancelButtonText: 'Cari yang Lain',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            // Panggil Kembali
            countdown();
          } else if (result.dismiss === Swal.DismissReason.cancel) {
            // Cari yang Lain
            redirectToOtherPage();
          }
        });
      }
    }, 1000);
  }

  function cancelCall() {
    clearInterval(countdownInterval);
    // Tambahkan kode yang ingin dijalankan saat tombol "Batalkan Panggilan" ditekan
  }

  // Contoh fungsi untuk menghentikan hitung mundur saat panggilan dijawab
  function answerCall() {
    clearInterval(countdownInterval);
    // Tambahkan kode yang ingin dijalankan saat panggilan dijawab
  }

  function redirectToOtherPage(){
     window.location.href = "{{ route('mitra') }}";
    }

  countdown();
</script>
      
@endsection