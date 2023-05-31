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
                        
                          <button class="btn btn-danger mt-3" onclick="showCancelModal()">
                            Batalkan Panggilan
                          </button>
                        
                          <!-- Modal -->
                          <div id="cancelModal" class="modal">
                            <div class="modal-content">
                              <span class="close" onclick="hideCancelModal()">&times;</span>
                              <h3>Alasan Pembatalan</h3>
                              <div>
                                <input type="checkbox" id="notAnsweredCheckbox">
                                <label for="notAnsweredCheckbox">Tidak menjawab</label>
                              </div>
                              <div>
                                <input type="checkbox" id="tooLongCheckbox">
                                <label for="tooLongCheckbox">Terlalu lama menunggu</label>
                              </div>
                              <div>
                                <input type="checkbox" id="otherCheckbox">
                                <label for="otherCheckbox">Lainnya</label>
                              </div>
                              <div class="modal-buttons">
                                <button class="btn btn-secondary" onclick="hideCancelModal()">Batal</button>
                                <button id="cancelButton" class="btn btn-danger" onclick="cancelCall()">Batalkan Sekarang</button>
                              </div>
                            </div>
                          </div>
                        </div>                        
                    </div>
                </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  var countdownInterval;
var cancelModal = document.getElementById("cancelModal");
var cancelButton = document.getElementById("cancelButton");

function countdown() {
  var countdownElement = document.getElementById("countdown");
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
  cancelModal.style.display = "block";
}

function hideCancelModal() {
  cancelModal.style.display = "none";
}

function cancelCall() {
  clearInterval(countdownInterval);

  // Mengambil status checkbox
  var notAnswered = document.getElementById("notAnsweredCheckbox").checked;
  var tooLong = document.getElementById("tooLongCheckbox").checked;
  var other = document.getElementById("otherCheckbox").checked;

  var reasons = [];

  if (notAnswered) {
    reasons.push("Tidak menjawab");
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
    timer: 3000,
    showConfirmButton: false
  }).then(() => {
    cancelButton.innerHTML = "Dibatalkan";
    cancelButton.disabled = true;
    cancelButton.classList.add("disabled");
  });
}

function answerCall() {
  clearInterval(countdownInterval);
  // Tambahkan kode yang ingin dijalankan saat panggilan dijawab
}

function redirectToOtherPage() {
  window.location.href = "{{ route('mitra') }}";
}

countdown();


</script>
      
@endsection