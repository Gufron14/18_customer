@extends('layout.app')

@section('content')
  <div class="container p-5">
    <div class="row mb-3 m-3">
      @foreach($calls as $call)
        <div class="card mb-3">
          <div class="card-body d-flex flex-row">
            <div class="col-4 d-flex d-inline-flex">
              <img src="{{ asset ('assets/img/avatar1.png') }}" alt="">
            </div>
            <div class="col-4 d-inline-flex d-flex flex-column ms-3">
              <div class="d-flex">{{$call['partner']['partner_name']}}</div>
              {{-- <h4 class="fw-bold d-block-flex">Kekurangan Akhlak</h4> --}}
              <div class="d-flex">
                {{ $call['message'] }}
              </div>
            </div>
            <div class="col-4 text-center mt-3">
              <h6>Menunggu persetujuan</h6>
              <h1 id="countdown" class="fw-bold"></h1>
              <button class="btn btn-danger mt-3" onclick="showCancelModal()" id="cancelButton">
                Batalkan Panggilan
              </button>
            
              <!-- Modal -->
              <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="cancelModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="cancelModalLabel">Alasan Pembatalan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="notAnsweredCheckbox">
                          <label class="form-check-label" for="notAnsweredCheckbox">
                            Tidak ada jawaban
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="tooLongCheckbox">
                          <label class="form-check-label" for="tooLongCheckbox">
                            Terlalu lama menunggu
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="otherCheckbox">
                          <label class="form-check-label" for="otherCheckbox">
                            Lainnya
                          </label>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary" onclick="cancelCall()">Batalkan Sekarang</button>
                      </div>
                    </div>
                  </div>
                <!-- End Modal -->
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    var countdownInterval;
    var countdownElement = document.getElementById("countdown");
    var cancelModal = document.getElementById("cancelModal");
    var cancelButton = document.getElementById("cancelButton");

    function countdown() {
      var count = 300;
      countdownInterval = setInterval(function() {
        var minutes = Math.floor(count / 60);
        var seconds = count % 60;
        var formattedMinutes = minutes < 10 ? "0" + minutes : minutes;
        var formattedSeconds = seconds < 10 ? "0" + seconds : seconds;
        countdownElement.innerHTML = formattedMinutes + ":" + formattedSeconds;
        count--;
        if (count < 0) {
          clearInterval(countdownInterval);
          countdownElement.innerHTML = "";
          showCancelModal();
        }
      }, 1000);
    }

    function showCancelModal() {
      $('#cancelModal').modal('show');
    }

    function hideCancelModal() {
      $('#cancelModal').modal('hide');
    }

    function cancelCall() {
      clearInterval(countdownInterval);

      // Mengambil status checkbox
      var notAnswered = document.getElementById("notAnsweredCheckbox").checked;
      var tooLong = document.getElementById("tooLongCheckbox").checked;
      var other = document.getElementById("otherCheckbox").checked;

      var reasons = [];

      if (notAnswered) {
        reasons.push("Tidak ada jawaban");
      }

      if (tooLong) {
        reasons.push("Terlalu lama menunggu");
      }

      if (other) {
        reasons.push("Lainnya");
      }

      var message = "Panggilan dibatalkan. Alasan: " + reasons.join(", ");

      Swal.fire({
        icon: 'success',
        title: 'Panggilan Dibatalkan',
        text: message,
        timer: 2000,
        showConfirmButton: false
      }).then(function() {
        cancelButton.innerHTML = "Dibatalkan";
        cancelButton.disabled = true;
        cancelButton.classList.add("disabled");
      });
    }

    function answerCall() {
      clearInterval(countdownInterval);
      // Tambahkan kode yang ingin dijalankan saat panggilan dijawab
      Swal.fire({
        icon: 'success',
        title: 'Panggilan Dijawab',
        text: 'Panggilan berhasil dijawab'
      });
    }

    countdown();
  </script>
@endsection