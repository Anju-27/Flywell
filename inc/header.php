<!-- Header Start -->
<header class="main-header">
  <div class="header-sticky">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <!-- Logo Start -->
        <a class="navbar-brand" href="index.php">
          <img src="img/logo/logo.png" alt="Logo" width="150px">
        </a>
        <!-- Logo End -->

        <!-- Main Menu Start -->
        <div class="collapse navbar-collapse main-menu">
          <div class="nav-menu-wrapper">
            <ul class="navbar-nav mr-auto" id="menu">
              <li class="nav-item"><a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item"><a class="nav-link" href="about.php">About Us</a>
              <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
              <li class="nav-item"><a class="nav-link" href="career.php">Career</a></li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
              <!-- <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                    <ul>
                                        <li class="nav-item"><a class="nav-link" href="service-single.html">Service
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="projects.html">Our Projects</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" href="project-single.html">Project
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                        <li class="nav-item"><a class="nav-link" href="team-single.html">Team
                                                Details</a></li>
                                        <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing Plan</a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link"
                                                href="testimonials.html">Testimonials</a></li>
                                        <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image
                                                Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video
                                                Gallery</a></li>
                                        <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                        <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                    </ul>
                                </li> -->
            </ul>
          </div>

          <!-- Header Btn Start -->
          <div class="header-btn">
            <a href="contact.php" class="btn-default btn-highlighted">Contact Us</a>
          </div>
          <!-- Header Btn End -->
        </div>
        <!-- Main Menu End -->
        <div class="navbar-toggle"></div>
      </div>
    </nav>
    <div class="responsive-menu"></div>
  </div>
</header>
<!-- Header End -->

<script>
  var url = 'https://wati-integration-prod-service.clare.ai/v2/watiWidget.js?9244';
  var s = document.createElement('script');
  s.type = 'text/javascript';
  s.async = true;
  s.src = url;
  var options = {
    "enabled": true,
    "chatButtonSetting": {
      "backgroundColor": "#00e785",
      "ctaText": "Chat with us",
      "borderRadius": "25",
      "marginLeft": "0",
      "marginRight": "20",
      "marginBottom": "20",
      "ctaIconWATI": false,
      "position": "right"
    },
    "brandSetting": {
      "brandName": "Flywell",
      "brandSubTitle": "undefined",
      "brandImg": "https://www.wati.io/wp-content/uploads/2023/04/Wati-logo.svg",
      "welcomeText": "Hi there!\nHow can I help you?",
      "messageText": "Hello, %0A I have a question about {{page_link}}",
      "backgroundColor": "#00e785",
      "ctaText": "Chat with us",
      "borderRadius": "25",
      "autoShow": false,
      "phoneNumber": "9820884777"
    }
  };
  s.onload = function () {
    CreateWhatsappChatWidget(options);
  };
  var x = document.getElementsByTagName('script')[0];
  x.parentNode.insertBefore(s, x);
</script>