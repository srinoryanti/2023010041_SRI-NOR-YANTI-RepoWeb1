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
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <title>CV.Oviena</title>

  <!-- Slider Stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!-- Custom Styles for this Template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- Responsive Styles -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- Header Section -->
    <header class="header_section">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <img src="images/logo.png" alt="Oviena Shop Logo" style="height: 80px;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shop.php">Shop</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
          </ul>
          <div class="user_option">
            <a href="login.php">
              <i class="fa fa-user" aria-hidden="true"></i>
              <span>Login</span>
            </a>
          </div>
        </div>
      </nav>
    </header>

    <!-- Slider Section -->
    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Welcome to Our Fashion Oviena</h1>
                      <p>Explore our collection of the best clothes that combine comfort, style, and quality.</p>
                      <a href="contact.php">Contact Us</a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/slider.png" alt="Fashion Image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Welcome to Our Fashion Oviena</h1>
                      <p>Explore more about our collections. Our designs bring you the best in fashion and comfort.</p>
                      <a href="contact.php">Contact Us</a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/slider.png" alt="Fashion Image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box">
                      <h1>Welcome to Our Fashion Oviena</h1>
                      <p>Our products are designed to offer you ultimate comfort and style at affordable prices.</p>
                      <a href="contact.php">Contact Us</a>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="img-box">
                      <img src="images/slider.png" alt="Fashion Image" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel_btn-box">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
              <span class="sr-only">Previous</span>
            </a>
            <img src="images/line.png" alt="" />
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
      </div>
    </section>
  </div>

  <!-- Shop Section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Latest Products</h2>
      </div>
      <div class="row">
<!-- Product Item 1 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/koleksi 1.jpg" alt="Gamis Dewasa" />
              </div>
              <div class="detail-box">
                <h6>Gamis Motif Bordir</h6>
                <h6>Price <span>$110</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
 <!-- Product Item 2 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/koleksi 2.jpg" alt="Gamis Dewasa" />
              </div>
              <div class="detail-box">
              <h6>Gamis Bunga</h6>
                <h6>Price <span>$130</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
 <!-- Product Item 3 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/koleksi 3.jpg" alt="Gamis Dewasa" />
              </div>
              <div class="detail-box">
                <h6>Gamis Canda Tali</h6>
                <h6>Price <span>$120</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>

 <!-- Product Item 4 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/koleksi polos.jpg" alt="Gamis Anak" />
              </div>
              <div class="detail-box">
                <h6>Gamis Brukat</h6>
                <h6>Price <span>$180</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
<!-- Product Item 5 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/8.jpg" alt="Gamis Anak" />
              </div>
              <div class="detail-box">
                <h6>Gamis Brukat</h6>
                <h6>Price <span>$180</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
<!-- Product Item 6 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/koleksi renda.jpg" alt="Gamis Anak" />
              </div>
              <div class="detail-box">
                <h6>Gamis Brukat</h6>
                <h6>Price <span>$180</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
<!-- Product Item 7 -->
        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/7.jpg" alt="Gamis Anak" />
              </div>
              <div class="detail-box">
                <h6>Gamis Brukat</h6>
                <h6>Price <span>$180</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
<!-- Product Item 8 -->
<div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box">
            <a href="#">
              <div class="img-box">
                <img src="images/koleksi kotak.jpg" alt="Gamis Anak" />
              </div>
              <div class="detail-box">
                <h6>Gamis Brukat</h6>
                <h6>Price <span>$180</span></h6>
              </div>
              <div class="new">
                <span>New</span>
              </div>
            </a>
          </div>
        </div>
        <!-- Additional Products... -->
      </div>
      <div class="btn-box">
        <a href="#">View All Products</a>
      </div>
    </div>
  </section>

   <!-- Contact Section -->
   <section class="contact_section layout_padding" style="padding: 80px 0;">
    <div class="container">
      <div class="heading_container text-center">
        <h2 style="font-size: 30px; font-weight: bold; margin-bottom: 30px; color: #000;">Order Your Gamis or Products</h2>
      </div>

      <div class="row">
        <div class="col-12 text-center">
          <div style="background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
            <h3 style="color: #db4566; font-size: 28px; font-weight: bold; margin-bottom: 20px;">Exclusive Offer for You!</h3>
            <p style="font-size: 16px; color: #333; margin-bottom: 20px;">
              We offer a wide range of high-quality gamis, designed to fit your needs for every occasion. Whether you're attending a formal event or looking for casual comfort, our collection has something for everyone.
            </p>
            <p style="font-size: 16px; color: #333; margin-bottom: 20px;">
              🌟 <span style="font-weight: bold; text-decoration: underline;">Order now and enjoy a 10% discount</span> on your first purchase via WhatsApp! 🌟
            </p>
            <p style="font-size: 16px; color: #333; margin-bottom: 20px;">
              Click the button below to place your order, and our team will assist you in getting the perfect gamis for your needs.
            </p>
            <a href="https://wa.me/6285712444826?text=Hello,%20I%20would%20like%20to%20order%20a%20gamis." target="_blank" class="btn btn-primary" style="background-color: #db4566; border: none; padding: 12px 40px; color: #fff; font-size: 18px; font-weight: bold; border-radius: 8px; transition: background-color 0.3s ease;">
              Order Now via WhatsApp
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonial Section -->
  <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Testimonial</h2>
      </div>
    </div>
    <div class="container px-0">
      <div id="customCarousel2" class="carousel carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <!-- Testimonial 1 -->
          <div class="carousel-item active">
            <div class="box">
              <div class="client_info">
                <div class="client_name">
                  <h5>Rahma</h5>
                  <h6>Customer</h6>
                </div>
                <i class="fa fa-quote-left" aria-hidden="true"></i>
              </div>
              <p>
                "Belanja di sini bener-bener puas banget! Barangnya persis seperti di foto, kualitasnya oke, dan pengirimannya super cepat..."
              </p>
            </div>
          </div>

          <!-- Additional Testimonials... -->
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

  <!-- Info Section -->
  <section class="info_section layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="https://www.facebook.com/share/1Bmzryk4Ue/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/oviena.collection?igsh=MTNmYnJrcXA4anFpMQ=="><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.tiktok.com/@galerioviena?_t=ZS-8tHYQI7BmWl&_r=1"><i class="fa fa-youtube" aria-hidden="true"></i></a>
      </div>
    </div>

    <!-- Footer Section -->
    <footer class="footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Sri Nor Yanti</a>
        </p>
      </div>
    </footer>
  </section>

  <!-- JS Scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="js/custom.js"></script>

</body>

</html>
