<?php 
  require_once("koneksi.php");
$data = mysqli_query($conn, "SELECT * FROM kategori join kursus using(id_kategori) join materi using(id_kursus)");
?>

<!DOCTYPE php>
<php lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>Online Course</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h page-scroll" href="index.php"><img src="img/logo.png " style="width:200px"
                alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto align-items-center">
                <li class="nav-item">
                  <a class="page-scroll btn btn-primary" href="index.php">Home</a>
                  <a href="admin/login.php" class="btn btn-warning">Login
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->



    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses mt-5" id="course">
      <div class="container mt-5">
        <div class="row justify-content-center pt-5">
          <div class="col-lg-5">
            <div class="main_title pt-5">
              <h2 class="mb-3">Popular Courses</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
          <div class="col-lg-12">
            <div class="owl-carousel active_course">

              <?php
            while ($rows = mysqli_fetch_array($data)) {
                  ?>
              <div class="single_course">
                <div class="course_head">
                  <img class="img-fluid" src="img/courses/c2.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">50%</span>
                  <span class="tag mb-4 d-inline-block">
                    <?php echo $rows["jenis_kategori"]?>
                  </span>
                  <h4 class="mb-3">
                    <a href="#"><?php echo $rows["judul"] ?></a>
                  </h4>
                  <p style="text-align: justify;">
                    <?php echo $rows["deskripsi"] ?>
                  </p>
                  <div class="text-center">
                    <a href="<?php echo $rows["link_embed"] ?>" class="btn btn-warning px-3 mt-2 ">
                      join us
                    </a>
                  </div>
                </div>
              </div>
              <?php
          }               
          ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--================ End Popular Courses Area =================-->


    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Top Products</h4>
            <ul>
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Jobs</a></li>
              <li><a href="#">Brand Assets</a></li>
              <li><a href="#">Investor Relations</a></li>
              <li><a href="#">Terms of Service</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Resources</h4>
            <ul>
              <li><a href="#">Guides</a></li>
              <li><a href="#">Research</a></li>
              <li><a href="#">Experts</a></li>
              <li><a href="#">Agencies</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get" class="form-inline">
                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'" required=""
                  type="email" />
                <button class="click-btn btn btn-default">
                  <span>subscribe</span>
                </button>
                <div style="position: absolute; left: -5000px;">
                  <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
                </div>

                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
            document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by
            <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
    $(document).ready(function() {
      $('.nav-link').click(function() {
        $('.nav-link').removeClass('active')
        $(this).addClass('active')
      })

    })
    </script>
    <script src="js/popper.js">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>

    <script src="js/script.js"></script>
  </body>

</php>