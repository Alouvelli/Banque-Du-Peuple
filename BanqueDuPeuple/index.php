<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8"/>
    <title>Banque</title>

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">


    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" type="text/css" media="screen" href="public/lib/bootstrap/css/bootstrap.min.css">
    <!-- Libraries CSS Files -->
    <link rel="stylesheet" type="text/css" media="screen" href="public/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="public/lib/animate/animate.min.css">
    <!-- Main Stylesheet File -->
    <link rel="stylesheet" type="text/css" media="screen" href="public/css/style.css">
    
</head>
<body>
<header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><h1><strong>BANQUE DU PEUPLE</strong></h1></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li class="menu-has-children"><a href="">Client</a>
            <ul>
              <li><a href="ajout.clients">Ajouter un client</a></li>
              <li class="menu-has-children"><a href="">Gérer un client</a>
                <ul>
                  <li><a href="clients">Modifier un client</a></li>
                  <li><a href="clients">Supprimer un client</a></li>
                </ul>
              </li>
              <li><a href="clients">Liste des clients</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Compte</a>
            <ul>
              <li><a href="ajout.comptes">Ajouter un compte</a></li>
              <li class="menu-has-children"><a href="">Gérer un compte</a>
                <ul>
                  <li><a href="comptes">Modifier un compte</a></li>
                  <li><a href="comptes">Supprimer un compte</a></li>
                </ul>
              </li>
              <li><a href="comptes">Liste des comptes</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenue à la Banque Du Peuple</h1>
      
      <a href="#about" class="btn-get-started">Get Started</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

  <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Notre BIO</h2>
            <p>
              La banque du peuple est une institution financière qui a 12 agences et plus de 500 clients dans les régions du Sénégal.
            </p>
          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
</section><!-- #about -->

<!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contact</h3>
          <p class="section-description">Pour plus d'informations, Veuillez nous contacter s'il vous plait</p>
        </div>
      </div>
      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Gueule Tapée Rue 63x52<br>Dakar</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>louthebossone19@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>+221 771159427</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Banque Du Peuple</strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="public/lib/jquery/jquery.min.js"></script>
  <script src="public/lib/jquery/jquery-migrate.min.js"></script>
  <script src="public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/lib/easing/easing.min.js"></script>
  <script src="public/lib/wow/wow.min.js"></script>
  <script src="public/lib/waypoints/waypoints.min.js"></script>
  <script src="public/lib/counterup/counterup.min.js"></script>
  <script src="public/lib/superfish/hoverIntent.js"></script>
  <script src="public/lib/superfish/superfish.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="public/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="public/js/main.js"></script>


</body>
</html>