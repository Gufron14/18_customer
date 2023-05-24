<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <link rel="icon" href="{{ asset('assets/img/logo.png')}}">

    <link rel="stylesheet" href="css/bootstrap.css">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/js/navbar.js') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    {{-- FONT Style --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@300;400;700&display=swap" rel="stylesheet">
    {{-- END FONT Style --}}

  </head>
  <body>
    
    @include('sweetalert::alert')
    @include('layout.navbar')

    <div class="min-h-screen">
      @yield('content')
    </div>
      

    @include('layout.footer')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet" href="js/bootstrap.js">
    
  </body>
</html>