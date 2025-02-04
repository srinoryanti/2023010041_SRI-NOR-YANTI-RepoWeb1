<?php
// Start session (if needed for authentication or cart functionality)
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="gift, online store, gifts" />
  <meta name="description" content="Giftos - Your one-stop gift shop" />
  <meta name="author" content="Sri Nor Yanti" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Testimonial</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  
  <!-- Bootstrap core css -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  
  <!-- Responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <!-- Hero area -->
  <div class="hero_area">
    <!-- Header section starts -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <span>Oviena</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse innerpage_navbar" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="testimonial.php">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- End header section -->
  </div>
  <!-- End hero area -->

  <!-- Testimonial section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Testimonial</h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>Rahma</h5>
                  <h6>Default model text</h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>"Belanja di sini bener-bener puas banget! Barangnya persis seperti di foto, kualitasnya oke, dan pengirimannya super cepat. Penjualnya juga ramah banget dan fast response. Gak nyesel deh belanja di sini. Bakal jadi langganan!"</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>Ida</h5>
                  <h6>Default model text</h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>"Harganya murah tapi kualitasnya gak murahan. Udah beberapa kali belanja, selalu aman, barang sampai dengan kondisi baik. Packing-nya juga rapi banget. Pokoknya recommended banget buat yang mau belanja online!"</p>
            </div>
          </div>
          <div class="carousel-item">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>Ummi</h5>
                  <h6>Default model text</h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>"Saya suka banget sama pelayanan toko ini! Barangnya lengkap, banyak pilihan, dan sering ada promo menarik. Saya sempat salah pilih ukuran, tapi proses retur sangat mudah dan cepat. Terima kasih atas pelayanannya yang luar biasa!"</p>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- End testimonial section -->

  <!-- Info section -->
  <section class="info_section layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="https://www.facebook.com/share/1Bmzryk4Ue/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/oviena.collection?igsh=MTNmYnJrcXA4anFpMQ=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.tiktok.com/@galerioviena?_t=ZS-8tHYQI7BmWl&_r=1"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>

    <!-- Footer section -->
    <footer class="footer_section">
      <div class="container">
        <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/">Sri Nor Yanti</a></p>
      </div>
    </footer>
    <!-- End footer section -->
  </section>
  <!-- End info section -->

  <!-- Scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
