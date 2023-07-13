<?php 
  require_once("koneksi.php");
$data = mysqli_query($conn, "SELECT * FROM kursus JOIN kategori USING(id_kategori)");
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
            <a class="navbar-brand logo_h page-scroll" href="#home"><img src="img/logo.png " style="width:200px"
                alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto align-items-center">
                <li class="nav-item active">
                  <a class="nav-link page-scroll" href="#home">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#feature">Feature</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#course">Course</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#registration">Registration</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link page-scroll" href="#trainer">Trainer</a>
                </li>
                <li class="nav-item">
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

    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area" id="home">
      <div class="banner_inner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center">
                <p class="text-uppercase">
                  Best online education service In the world
                </p>
                <h2 class="text-uppercase mt-4 mb-5">
                  One Step Ahead This Season
                </h2>
                <div>
                  <a href="#registration" class="primary-btn2 mb-3 mb-sm-0 page-scroll">learn contact</a>
                  <a href="#course" class="primary-btn ml-sm-3 ml-0 page-scroll">see course</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap_top" id="feature">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Scholarship Facility</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Sell Online Course</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Global Certification</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses" id="course">
      <div class="container ">
        <div class="row justify-content-center ">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Popular Courses</h2>
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
                  <img class="img-fluid" src="img/courses/6.jpg" alt="" />
                </div>
                <div class="course_content">
                  <span class="price">50%</span>
                  <span class="tag mb-4 d-inline-block">
                    <?php echo $rows["jenis_kategori"]?>
                  </span>
                  <h4 class="mb-3">
                    <a href="Course.php"><?php echo $rows["judul"] ?></a>
                  </h4>
                  <p>
                    <?php echo $rows["deskripsi"] ?>
                  </p>

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

    <!--================ Start Registration Area =================-->
    <div class="section_gap registration_area" id="registration">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7">
            <div class="row clock_sec clockdiv" id="clockdiv">
              <div class="col-lg-12">
                <h1 class="mb-3">Register Now</h1>
                <p>
                  There is a moment in the life of any aspiring astronomer that
                  it is time to buy that first telescope. It’s exciting to think
                  about setting up your own viewing station.
                </p>
              </div>
              <div class="col clockinner1 clockinner">
                <h1 class="days">150</h1>
                <span class="smalltext">Days</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="hours">23</h1>
                <span class="smalltext">Hours</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="minutes">47</h1>
                <span class="smalltext">Mins</span>
              </div>
              <div class="col clockinner clockinner1">
                <h1 class="seconds">59</h1>
                <span class="smalltext">Secs</span>
              </div>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <div class="register_form">
              <h3>Courses for Free</h3>
              <p>It is high time for learning</p>
              <form class="form_area" id="myForm" action="mail.php" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <input class="form-control border" id="name" type="name" placeholder="Name" />
                    <input class="form-control border mt-2" id="phone" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                      maxlength="12" placeholder="No HP" />
                    <div class="form-floating">
                      <textarea class="form-control mt-2" placeholder="Leave a comment here" id="comment"></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12 text-center">
                    <button class="primary-btn send" type="submit">Submit</button>
                  </div>
                </div>
              </form>
              <div id="text-info"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================ End Registration Area =================-->

    <!--================ Start Trainers Area =================-->
    <section class="trainer_area section_gap_top" id="trainer">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Expert Trainers</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center">
          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t1.jpg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Mated Nithan</h4>
              <p class="designation">Sr. web designer</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t2.jpg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>David Cameron</h4>
              <p class="designation">Sr. web designer</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t3.jpg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Jain Redmel</h4>
              <p class="designation">Sr. Faculty Data Science</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 col-sm-12 single-trainer">
            <div class="thumb d-flex justify-content-sm-center">
              <img class="img-fluid" src="img/trainer/t4.jpg" alt="" />
            </div>
            <div class="meta-text text-sm-center">
              <h4>Nathan Macken</h4>
              <p class="designation">Sr. web designer</p>
              <div class="mb-4">
                <p>
                  If you are looking at blank cassettes on the web, you may be
                  very confused at the.
                </p>
              </div>
              <div class="align-items-center justify-content-center d-flex">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
                <a href="#"><i class="ti-pinterest"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Trainers Area =================-->



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
            </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a
              href="https://colorlib.com" target="_blank">Colorlib</a>
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