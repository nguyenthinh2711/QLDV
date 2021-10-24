<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dịch Vụ Khách Sạn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Dịch Vụ Khách Sạn</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Khách Sạn</a></li>
          <li><a class="nav-link scrollto" href="#about">Dịch Vụ Ăn Uống</a></li>
          <li><a class="nav-link scrollto" href="#services">Dịch Vụ Súc Khỏe</a></li> 
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Chào Mừng Đến Với Khách Sạn Của Chúng Tôi</h1>
      <h2>Chúng Tôi Mong Muốn Các Bạn Hài Lòng Với Các Dịch Vụ</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Dịch Vụ Ăn Uống ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Menu Hôm Nay</h2>
          <p>Menu Hôm Nay Của Khách Sạn Chúng Tôi Gồm Những Món Như Sau.</p>
        </div>

        <div class="row">
          @foreach ($monans as $monan)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" >
                <img src="{{ asset('storage/thumbnails/'.$monan->imgma) }}" height="300" width="250">
                
                <h4 class="title"><a href="">{{ $monan->tenma }}</a></h4>
                <p class="description">{{ $monan->giama }} VND</p>
              </div>
            </div>
          @endforeach


        </div>

      </div>
    </section><!-- End Dịch Vụ Ăn Uống -->

    <!-- ======= Dịch Vụ Sức Khỏe ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Dịch Vụ Chăm Sóc Sức Khỏe</h2>
          <p>Dịch vụ  chăm sóc sức khỏe của khách sạn gồm những dịch vụ sau.</p>
        </div>

        <div class="row">
          @foreach ($dichvus as $dichvu)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" >
                <img src="{{ asset('storage/thumbnails/'.$dichvu->imgdv) }}" height="300" width="250" border: 50%>
                
                <h4 class="title">{{ $dichvu->tendv }}</h4>
                <p>{{ $dichvu->chitiet }}</p>
                <p class="description">{{ $dichvu->giadv }}VND</p>
              </div>
            </div>
          @endforeach
          

        </div>

      </div>
    </section><!-- End Dịch Vụ Spa -->



  


  

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Liên Hệ</h2>
          
        </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Khách sạn Lotte Hotel Số 54, phố Liễu Giai, phường Cống Vị, quận Ba Đình, Hà Nội, Việt Nam</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+84 123 456 789</p>
            </div>
          </div>

        </div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="">
            <div class="footer-info">
              <h3>Khách Sạn</h3>
              <p class="pb-3"><em>Thông Tin Liên Lạc.</em></p>
              <p>
                Khách sạn Lotte Hotel Hà Nội Số 54, phố Liễu Giai, phường Cống Vị, quận Ba Đình <br>
                Hà Nội, Việt Nam<br><br>
                <strong>Phone:</strong> +84 123 456 789<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              
            </div>
          </div>




        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dịch Vụ Ăn Uống</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        Designed by <a href="https://www.facebook.com/anh.tuan.7120/">ERP Team</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>