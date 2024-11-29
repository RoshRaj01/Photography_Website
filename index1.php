<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit();
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="camera.ico">

  <meta name="description" content="" />
  <meta name="keywords" content="" />
  

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600, 700,900|Oswald:400,700" rel="stylesheet">


  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">
  <link rel="stylesheet" href="css/fancybox.min.css">

  <link rel="stylesheet" href="css/style.css">
  <title>Rosh Raj Photography</title>


</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="header-bar d-flex d-lg-block align-items-center site-navbar-target" data-aos="fade-right">
      <div class="site-logo">
        <a href="index.php">Rosh Raj</a>
      </div>

      <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle "><span class="icon-menu h3"></span></a></div>

      <div class="main-menu">
        <ul class="js-clone-nav">
          <li><a href="#section-home" class="nav-link">Home</a></li>
          <li><a href="#section-photos" class="nav-link">Photos</a></li>
          <li><a href="#section-about" class="nav-link">About</a></li>
        </ul>
        <ul class="social js-clone-nav">
          <li><a href="https://www.instagram.com/rosh__raj/"><span class="icon-instagram"></span></a></li>
          <li><a href="https://www.facebook.com/rosh.r.56"><span class="icon-facebook"></span></a></li>
          <li><a href="https://www.linkedin.com/in/rosh-r-889444291/"><span class="icon-linkedin"></span></a></li>
        </ul>
        <ul class="js-clone-nav">
          <li><a href="logout.php" class="nav-link">Logout</a></li>
        </ul>
      </div>
    </header> 
    <main class="main-content">

      <section class="site-section-hero bg-image mb-5" style="background-image: url('images/hero-min.jpg');"  data-stellar-background-ratio="0.5" id="section-home">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 text-center">
            <h1 class=" heading text-uppercase text-white" data-aos="fade-up">Rosh Raj Photography</h1>
            <p class="lead text-white mb-4" data-aos="fade-up" data-aos-delay="100">A collection of Photographs taken by Rosh Raj</a></p>
          </div>
        </div>
      </section>

      <div class="container-fluid site-section">


        <div class="row mb-3">
          <div class="col-12 text-center">
            <h2 class="heading">Photos</h2>
          </div>
        </div>

        <section class="row align-items-stretch photos" id="section-photos">
          <div class="col-12">
            <div class="row align-items-stretch">

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="image/img_1.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_1.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_2.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_2.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_3.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_3.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="image/img_4.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_4.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_5.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_5.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_6.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_6.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="image/img_7.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_7.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_8.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_8.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_9.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_9.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>


              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="image/img_10.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_10.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_11.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_11.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_12.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_12.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="image/img_13.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_13.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_14.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_14.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_15.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_15.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up">
                <a href="image/img_16.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_16.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_17.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_17.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_18.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_18.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>

              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_19.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_19.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <a href="image/img_20.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_20.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <a href="image/img_21.jpg" class="d-block photo-item" data-fancybox="gallery">
                  <img src="image/img_21.jpg" alt="Image" class="img-fluid mb-0">
                  <div class="photo-text-more">
                    <span class="icon icon-eye"></span>
                  </div>
                </a>
              </div>



            </div>

          </div>
        </section> <!-- #section-photos -->

        <section class="site-section" id="section-about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <img src="image/img_main.jpg" alt="Rosh Raj" class="img-fluid mb-4 w-50 rounded-circle">
                        <div data-aos="fade-up" data-aos-delay="100">
                            <h2>Hi, I'm Rosh Raj</h2>
                            <p>I'm a passionate photographer who finds inspiration in the beauty of nature, the harmony of landscapes, and the art of symmetry. My journey into photography began with a simple desire to capture the world as I see it—full of untold stories, fleeting moments, and timeless beauty. Over the years, this passion has evolved into a deep commitment to creating visual art that resonates with people.</p>
                            <p>Photography, for me, is more than just taking pictures; it’s about freezing emotions, highlighting the intricate details of life, and bringing to light the wonders often overlooked. Whether it's the golden hues of a sunrise, the mesmerizing patterns of symmetry in architecture, or the serene calm of a forest, I aim to immortalize these moments through my lens.</p>

                            <h3>What Drives My Work</h3>
                            <ul>
                                <li><strong>Nature's Magic:</strong> Capturing the intricate details of the natural world—from towering mountains to delicate flowers—is one of my greatest joys.</li>
                                <li><strong>The Power of Light:</strong> I love playing with light and shadows to create dramatic and impactful imagery.</li>
                                <li><strong>Human Connection:</strong> Documenting people and their stories is a privilege that adds a human touch to my portfolio.</li>
                            </ul>

                            <h3>Beyond Photography</h3>
                            <p>When I’m not behind the lens, you’ll find me exploring new places, reading about the art of storytelling, or experimenting with creative editing techniques. I also enjoy teaching budding photographers through workshops and online tutorials.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="row justify-content-center">
          <div class="col-md-12 text-center py-5">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by Rosh Raj</a>
            </p>
          </div>
        </div>
      </div>
    </main>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/lozad.min.js"></script>
  

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
  </body>
</html>
