<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('onepage/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('onepage/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('onepage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('onepage/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('onepage/assets/css/style.css') }}" rel="stylesheet">
  <style>
    .my-custom-scrollbar {
    position: relative;
    height: 450px;
    overflow: auto;
    }
    .table-wrapper-scroll-y {
    display: block;
    }
  </style>
  <!-- =======================================================
  * Template Name: OnePage - v4.7.0
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="#">SistemPakar</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home.index2') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index2') }}">Diagnosa</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index2') }}">Manipulasi Ciri</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index2') }}">Manipulasi Aturan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
      <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9 text-center">
          <h1>Sistem Pakar Diagnosa Penyakit Tanaman Kakao</h1>
          <h2>Forward Chaining</h2>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    @yield('content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Alif Akbar I</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  {{-- <div id="preloader"></div> --}}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ 'onepage/assets/vendor/purecounter/purecounter.js' }}"></script>
  <script src="{{ 'onepage/assets/vendor/aos/aos.js' }}"></script>
  <script src="{{ 'onepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js' }}"></script>
  <script src="{{ 'onepage/assets/vendor/glightbox/js/glightbox.min.js' }}"></script>
  <script src="{{ 'onepage/assets/vendor/isotope-layout/isotope.pkgd.min.js' }}"></script>
  <script src="{{ 'onepage/assets/vendor/swiper/swiper-bundle.min.js' }}"></script>
  <script src="{{ 'onepage/assets/vendor/php-email-form/validate.js' }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ 'onepage/assets/js/main.js' }}"></script>

</body>

</html>