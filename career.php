<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="Awaiken">
  <!-- Page Title -->
  <title>Flywell :: Career</title>
  <!-- Favicon Icon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/logo/fav.png">
  <!-- Google Fonts Css-->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;display=swap"
    rel="stylesheet">
  <!-- Custom Fonts Css-->
  <link href="css/fonts.css" rel="stylesheet" media="screen">
  <!-- Bootstrap Css -->
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <!-- SlickNav Css -->
  <link href="css/slicknav.min.css" rel="stylesheet">
  <!-- Swiper Css -->
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <!-- Font Awesome Icon Css-->
  <link href="css/all.min.css" rel="stylesheet" media="screen">
  <!-- Animated Css -->
  <link href="css/animate.css" rel="stylesheet">
  <!-- Magnific Popup Core Css File -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- Mouse Cursor Css File -->
  <link rel="stylesheet" href="css/mousecursor.css">
  <!-- Main Custom Css -->
  <link href="css/custom.css" rel="stylesheet" media="screen">
</head>

<body>

  <?php include("inc/header.php"); ?>

  <!-- Page Header Start -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- Page Header Box Start -->
          <div class="page-header-box">
            <h1 class="text-anime-style-3" data-cursor="-opaque">Career</h1>
          </div>
          <!-- Page Header Box End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Page Header End -->

  <!-- Career Application Start -->
  <div class="career-application">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5">
          <!-- Career Content Start -->
          <div class="career-application-content wow fadeInUp">
            <div class="section-title">
              <h3 class="section-sub-title">Join Our Team</h3>
              <h2 class="text-anime-style-3" data-cursor="-opaque">Apply For Career Opportunities</h2>
              <p>Share your details with Flywell Manpower Consultants and our recruitment team will connect with you for
                suitable opportunities.</p>
            </div>
          </div>
          <!-- Career Content End -->
        </div>

        <div class="col-lg-7">
          <!-- Career Form Start -->
          <div class="contact-us-form career-form-box">
            <div class="section-title">
              <h2 class="text-anime-style-3" data-cursor="-opaque">Career Form</h2>
            </div>

            <div class="contact-form career-form">
              <form id="careerForm" action="#" method="POST" enctype="multipart/form-data" data-toggle="validator"
                class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="row">
                  <div class="form-group col-md-6 mb-2">
                    <label for="careerName">Full Name <span>*</span></label>
                    <input type="text" name="full_name" class="form-control" id="careerName" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-2">
                    <label for="careerEmail">Email Address <span>*</span></label>
                    <input type="email" name="email" class="form-control" id="careerEmail" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-2">
                    <label for="careerPhone">Phone Number <span>*</span></label>
                    <input type="tel" name="phone" class="form-control" id="careerPhone" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-6 mb-2">
                    <label for="careerPosition">Position Applied For <span>*</span></label>
                    <input type="text" name="position" class="form-control" id="careerPosition" required>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-12 mb-2">
                    <label for="careerMessage">Message</label>
                    <textarea name="message" class="form-control" id="careerMessage" rows="5"></textarea>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group col-md-12 mb-2">
                    <label for="careerResume">Upload Resume</label>
                    <input type="file" name="resume" class="form-control career-file-input" id="careerResume"
                      accept=".pdf,.doc,.docx">
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="col-md-12">
                    <button type="submit" class="btn-default">submit</button>
                    <div id="careerMsgSubmit" class="h3 hidden"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Career Form End -->
        </div>
      </div>
    </div>
  </div>
  <!-- Career Application End -->


  <?php include("inc/footer.php"); ?>

  <!-- Jquery Library File -->
  <script src="js/jquery-3.7.1.min.js"></script>
  <!-- Circle Progress Js File -->
  <script src="js/circle-progress.min.js"></script>
  <!-- Bootstrap js file -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Validator js file -->
  <script src="js/validator.min.js"></script>
  <!-- SlickNav js file -->
  <script src="js/jquery.slicknav.js"></script>
  <!-- Swiper js file -->
  <script src="js/swiper-bundle.min.js"></script>
  <!-- Counter js file -->
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <!-- Magnific js file -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <!-- SmoothScroll -->
  <script src="js/SmoothScroll.js"></script>
  <!-- Parallax js -->
  <script src="js/parallaxie.js"></script>
  <!-- MagicCursor js file -->
  <script src="js/gsap.min.js"></script>
  <script src="js/magiccursor.js"></script>
  <!-- Text Effect js file -->
  <script src="js/SplitText.min.js"></script>
  <script src="js/ScrollTrigger.min.js"></script>
  <!-- YTPlayer js File -->
  <script src="js/jquery.mb.YTPlayer.min.js"></script>
  <!-- Wow js file -->
  <script src="js/wow.min.js"></script>
  <!-- Main Custom js file -->
  <script src="js/function.js"></script>
</body>

</html>