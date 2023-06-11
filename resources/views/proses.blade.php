@extends('layout.app')

@section('content')
  <div class="container p-5">
    <div class="row mb-3 m-3">
      @foreach($calls as $call)
        <div class="card mb-3">
          <div class="card-body d-flex flex-row">
            <div class="col-4 d-flex d-inline-flex">
              <img src="http://localhost:5000/api/user/partner/avatar/{{ $call['partner']['avatar'] }}" alt="" style="width: 200px; height:200px;">
            </div>
            <div class="col-4 d-inline-flex d-flex flex-column ms-3 mt-3">
              <div class="d-flex">{{$call['partner']['partner_name']}}</div>
              <h4 class="fw-bold d-block-flex">{{ $call['problem'] }}</h4>
              <div class="d-flex">
                {{ $call['message'] }}
              </div>
            </div>
            <div class="col-6 mt-3">
              <h6 id="text">
                @if ($call['order_status'] == 0)
                    Menunggu persetujuan
                @elseif ($call['order_status'] == 1)
                    Panggilan anda disetujui
                @elseif ($call['order_status'] == 2)
                    teknisi sedang dalam perjalan
                @elseif ($call['order_status'] == 3)
                    dalam proses pengerjaan
                @elseif ($call['order_status'] == 4)
                    selesai
                @endif
              </h6>
              <h1 id="timer" class="fw-bold"></h1>
              <button class="btn btn-danger mt-3" id="cancelBtn"
              {{ $call['order_status'] !== 0 ? 'disabled' : '' }}>
                Batalkan Panggilan
              </button>
              </div>
            </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    var countdownTime = 300;
    var timerInterval;

    function formatTime(seconds) {
      var minutes = Math.floor(seconds / 60);
      var remainingSeconds = seconds % 60;

      return `${padZero(minutes)}:${padZero(remainingSeconds)}`;
    }

    function padZero(number) {
      return number < 10 ? '0' + number : number;
    }

    function updateTimer() {
      var timerElement = document.getElementById('timer');

      countdownTime--;
      timerElement.innerText = formatTime(countdownTime);

      if (countdownTime <= 0) {
        clearInterval(timerInterval);
        timerElement.innerText = 'Waktu habis!';
        document.getElementById('cancelBtn').disabled = true;
      }
    }

    function cancelTimer() {
      clearInterval(timerInterval);
      document.getElementById('cancelBtn').innerText = 'Panggilan Dibatalkan';
      document.getElementById('cancelBtn').disabled = true;
      document.getElementById('text').innerText = 'Panggilan Dibatalkan';
    }

    function startTimer() {
      timerInterval = setInterval(updateTimer, 1000);
      document.getElementById('cancelBtn').removeAttribute('disabled');
    }

    // Cek status order dan atur tombol
    var partnerOrderStatus = <?php echo $call['order_status']; ?>;
    if (partnerOrderStatus !== 0) {
      document.getElementById('cancelBtn').disabled = true;
    } else {
      startTimer();
    }

    // Tambahkan event listener pada tombol "Batalkan Panggilan"
    document.getElementById('cancelBtn').addEventListener('click', function() {
      cancelTimer();
      countdownTime = 0;
    });
  </script>
@endsection