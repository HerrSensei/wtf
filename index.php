<?php 
//index.php

$nickname = '';
$email = '';
$yt_link = '';
$message = '';

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

if (isset($_POST["submit"]))
{
  $nickname = clean_text($_POST["name"]);
  $email = clean_text($_POST["email"]);
  $yt_link = clean_text($_POST["subject"]);
  $message = clean_text($_POST["message"]);

  $file_open = fopen("contact_data.csv", "a");
  $no_rows = count(file("contact_data.csv"));
  if($no_rows > 1)
  {
    $no_rows = ($no_rows -1) +1;
  }
  $form_data = array(
    'sr_no'   => $no_rows,
    'Nickname'=> $nickname,
    'Email'   => $email,
    'YT-Link' => $yt_link,
    'Message' => $message
  );
  fputcsv($file_open, $form_data);
}


?>


<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="utf-8">
  <title>Scurrows.tv - Chatregeln</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">
  

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="lib/font-awesome/css/brands.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: TheEvent
    Theme URL: https://bootstrapmade.com/theevent-conference-event-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><h1 class="mb-4 pb-0"><span>Scurrows.tv</span></h1></a>
        
      </div>
      <nav id="">
        <ul class="nav-menu float-right">
          <li><a href="https://twitter.com/scurrows" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
          <li><a href="https://www.instagram.com/scurrows/" target="_blank" class="facebook"><i class="fa fa-instagram"></i></a></li>
          <li><a href="https://www.youtube.com/scurrows" target="_blank" class="google-plus"><i class="fa fa-youtube"></i></a></li>
          <li><a href="https://open.spotify.com/playlist/1bKwMEE3WQ4JYd345UMWx1?si=1sfISCQYRh-ODh92FgH1tg" target="_blank" class="google-plus"><i class="fa fa-spotify"></i></a></li>
          <li><a href="​https://discord.gg/scurrows" target="_blank" class="twitter"><i class="fab fa-discord"></i></a></li>
        </ul>
      </nav>
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">Scurrows<br><span>Jetzt</span> Live anschauen!</h1>
      <p class="mb-4 pb-0">- Youtube Livestream starten - </p>
      <a href="https://www.youtube.com/c/scurrows/live" target="_blank" class="play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#faq" class="about-btn scrollto">Chatregeln lesen</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      F.A.Q Section
    ============================-->
    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Chatregeln </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                      Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                      Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq6" class="collapse" data-parent="#faq-list">
                    <p>
                      Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
                    </p>
                  </div>
                </li>
      
              </ul>
          </div>
        </div>

      </div>

    </section>

    <!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp" >

        <div class="section-header">
          <h2>Support ist kein mord</h2>
          <p>Wenn du Scurrows etwas spenden möchtest kannst du das hier</p>
        </div>
        <div class="form-row justify-content-center">
            <div class="col-auto">
              <a href="https://streamelements.com/scurrows/tip" target="_blank"><button type="submit">Spende da lassen</button></a>
            </div>
          </div>         
                         
      </div>
      <br>
      <br>
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>VIP werden</h2>
          <p>Scurrows mit einer Youtube Mitgliedschaft unterstützten</p>
          <p>& exklusive <span>Emotes</span> im Chat erhalten!</p>
        </div>
          <div class="form-row justify-content-center">
            <div class="col-auto">
              <a href="https://www.youtube.com/channel/UCL68ZdM_aGd2TgMviT5-sXg/membership" target="_blank"><button type="submit">ab 4,99 €</button></a>
            </div>
          </div>

      </div>
    </section>


    <!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h2>Entbannungsantrag stellen</h2>
          <p>Comming soon...</p>
        </div>

        <div class="form">
          <div id="sendmessage">Antrag wurde gestellt. Bei Annahme erhälst du eine Email!</div>
          <div id="errormessage">Sorry! Etwas ist schief gelaufen...</div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nickname" data-rule="minlen:4" data-msg="Mindestens 4 Zeichen eingeben" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Emailadresse" data-rule="email" data-msg="Ungültige Emailadresse" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Link deines Youtubekanals" data-rule="minlen:4" data-msg="Ungültiger Link" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Grund der Entbannung angeben!" placeholder="Teile uns mit, was du falsch gemacht hast und zeige Einsicht!"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Antrag stellen</button></div>
          </form>
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
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo.png" alt="TheEvenet">
            <p>In alias aperiam. Placeat tempore facere. Officiis voluptate ipsam vel eveniet est dolor et totam porro. Perspiciatis ad omnis fugit molestiae recusandae possimus. Aut consectetur id quis. In inventore consequatur ad voluptate cupiditate debitis accusamus repellat cumque.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#intro">Home</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#faq">About us</a></li>
            </ul>
            <br>
            <div class="social-links">
              <a href="https://twitter.com/scurrows" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://www.instagram.com/scurrows/" class="facebook"><i class="fa fa-instagram"></i></a>
              <a href="https://www.youtube.com/scurrows" class="google-plus"><i class="fa fa-youtube"></i></a>
              <a href="https://open.spotify.com/playlist/1bKwMEE3WQ4JYd345UMWx1?si=1sfISCQYRh-ODh92FgH1tg" class="google-plus"><i class="fa fa-spotify"></i></a>
              <a href="​https://discord.gg/scurrows" class="discord"><i class="fab fa-discord"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!--<div class="container">
       <div class="copyright">
        &copy; Copyright <strong>TheEvent</strong>. All Rights Reserved
      </div>
      <div class="credits">
        
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
        
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>-->
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>
