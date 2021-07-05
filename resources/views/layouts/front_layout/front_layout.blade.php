<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Addvance Repair Service</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/aos/aos.css" rel="stylesheet') }}">
  <link href="{{ url('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ url('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ url('css/front_css/style.css') }}" rel="stylesheet">

</head>

<body>

  @include('layouts.front_layout.front_header')  

  @yield('content')

  @include('layouts.front_layout.front_footer')

  <!-- Vendor JS Files -->
  <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ url('vendor/aos/aos.js') }}"></script>
  <script src="{{ url('vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ url('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ url('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('vendor/glightbox/js/glightbox.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('js/front_js/main.js') }}"></script>

</body>

</html>