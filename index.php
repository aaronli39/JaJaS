<?php
$msg = "";
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './phpmailer/phpmailer/src/Exception.php';
require './phpmailer/phpmailer/src/PHPMailer.php';
require './phpmailer/phpmailer/src/SMTP.php';

if (isset($_POST['submit'])) {
     $first_name = $_POST['name']; // required
     $email_from = $_POST['email']; // required
     $telephone = $_POST['tel']; // not required
     $comments = $_POST['message']; // required

     $mail = new PHPMailer();
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPAuth = true;
	$mail->Username = "aaronli39@gmail.com";
	$mail->Password = "abcabcabcd123LI";
	$mail->SMTPSecure = "ssl";
	$mail->Port = 587;
     $mail->addAddress('jchirinos@jajas.store');
     $mail->setFrom($email_from);
     $mail->Subject = "Hello JaJaS, you have an email!";
     $mail->isHTML(true);
     $mail->Body = $comments;

     if ($mail->send())
     $msg = "You email has been sent, thank you!";
     else
     $msg = "Please try again!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">

     <title>Compoober - Your Gardening Essentials</title>

     <!-- Bootstrap core CSS -->
     <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

     <!-- Custom fonts for this template -->
     <link href="vendor/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
     <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

     <!-- Custom styles for this template -->
     <link href="css/agency.css" rel="stylesheet">

     <style>
     #facircle {
          color: red;
     }
     </style>
</head>

<body id="page-top">

     <!-- Navigation -->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
               <a class="navbar-brand js-scroll-trigger" href="#page-top">Compoober</a>
               <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fa fa-bars"></i>
               </button>
               <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="#about">About</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="#purchase">Purchase</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="test/ind.php">Sell</a>
                         </li>
                         <li class="nav-item">
                              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                         </li>
                    </ul>
               </div>
          </div>
     </nav>

     <!-- Header -->
     <header class="masthead">
          <div class="container">
               <div class="intro-text">
                    <div class="intro-lead-in">Welcome to Compoober!</div>
                    <div class="intro-heading text-uppercase">It's Nice To Meet You</div>
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#about">Tell Me More</a>
               </div>
          </div>
     </header>

     <!-- Services -->
     <section id="services">
          <div class="container">
               <div class="row">
                    <div class="col-lg-12 text-center">
                         <h2 class="section-heading text-uppercase">Our Services</h2>
                         <p class="section-subheading text-muted">We only serve the Greater New York area</p>
                    </div>
               </div>
               <div class="row text-center">
                    <div class="col-md-4">
                         <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary" styke="color: black"></i>
                              <i class="fa fa-leaf fa-stack-1x fa-inverse"></i>
                         </span>
                         <h4 class="service-heading">Compost</h4>
                         <p class="text-muted">We deliver green compost from the local area, produced by locals</p>
                    </div>
                    <div class="col-md-4">
                         <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-house fa-stack-1x fa-inverse"></i>
                         </span>
                         <h4 class="service-heading">Local</h4>
                         <p class="text-muted">Our main goal is to deliver compost and products, locally.</p>
                    </div>
                    <div class="col-md-4">
                         <span class="fa-stack fa-4x">
                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
                              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                         </span>
                         <h4 class="service-heading">Green</h4>
                         <p class="text-muted">We are an online gardening supplier and our products are environmental-friendly, guaranteed.</p>
                    </div>
               </div>
          </div>
     </section>

     <!-- Purchase -->
     <section class="bg-light text-center" id="purchase">
          <div class="container">
               <h2 class="section-heading text-uppercase">Purchase</h2>
               <img src="smallcompost.png" style="width:40%;height:300px;border-radius:40%;">
               <h3><i>Small Compost</i></h3>
               <form action="chargeSmall.php" method="post">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_live_nIA6QW6hqxkYvpZWViXdBzip"
                    data-amount="999"
                    data-name="Compoober"
                    data-description="Uber - But for Poo"
                    data-image="logo.png"
                    data-locale="auto"
                    data-currency="usd"
                    data-zip-code="true">
                    </script>
               </form>
               <br></br>
               <img src="mediumcompost.png" style="width:40%;height:300px;border-radius:40%;">
               <h3><i>Medium Compost</i></h3>
               <form action="chargeMedium.php" method="post">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_live_nIA6QW6hqxkYvpZWViXdBzip"
                    data-amount="1999"
                    data-name="Compoober"
                    data-description="Uber - But for Poo"
                    data-image="logo.png"
                    data-locale="auto"
                    data-currency="usd"
                    data-zip-code="true">
                    </script>
               </form>
               <br></br>
               <img src="largecompost.png" style="width:40%;height:300px;border-radius:40%;">
               <h3><i>Large Compost</i></h3>
               <form action="chargeLarge.php" method="post">
                    <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                    data-key="pk_live_nIA6QW6hqxkYvpZWViXdBzip"
                    data-amount="2999"
                    data-name="Compoober"
                    data-description="Uber - But for Poo"
                    data-image="logo.png"
                    data-locale="auto"
                    data-currency="usd"
                    data-zip-code="true">
                    </script>
               </form>
     </div>

</section>

<!-- Portfolio Grid -->
<section class="bg-light" id="portfolio">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Snapshots</h2>
                    <p class="section-subheading text-muted">Various garden beauties of Greater New York, captured</p>
               </div>
          </div>
          <div class="row">
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                         <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                   <i class="fa fa-plus fa-3x"></i>
                              </div>
                         </div>
                         <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4>Clark Botanical Garden</h4>
                         <p class="text-muted">Albertson, New York</p>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                         <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                   <i class="fa fa-plus fa-3x"></i>
                              </div>
                         </div>
                         <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4>Brooklyn Botanical Garden</h4>
                         <p class="text-muted">Brooklyn, New York</p>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                         <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                   <i class="fa fa-plus fa-3x"></i>
                              </div>
                         </div>
                         <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4>Queens Botanical Garden</h4>
                         <p class="text-muted">Queens, New York</p>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                         <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                   <i class="fa fa-plus fa-3x"></i>
                              </div>
                         </div>
                         <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4>Central Park Conservatory Garden</h4>
                         <p class="text-muted">Manhattan, New York</p>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                         <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                   <i class="fa fa-plus fa-3x"></i>
                              </div>
                         </div>
                         <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4>Old Westbury Garden</h4>
                         <p class="text-muted">Nassau County, New York</p>
                    </div>
               </div>
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                         <div class="portfolio-hover">
                              <div class="portfolio-hover-content">
                                   <i class="fa fa-plus fa-3x"></i>
                              </div>
                         </div>
                         <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
                    </a>
                    <div class="portfolio-caption">
                         <h4>New York Botanical Garden</h4>
                         <p class="text-muted">Bronx, New York</p>
                    </div>
               </div>
          </div>
     </div>
</section>

<!-- About -->
<section id="about">
     <div class="container">
          <div class="row">
               <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <p class="section-subheading text-muted">Our mission begins and ends with environmental friendliness. We believe that gardening should be a fun and nature-preserving
                         activity. By promoting the local production of green compost, we can make Greater New York's gardens even more beautiful, and preserve nature at the same time. With
                         us, you can create your own dream garden, and join in our mission of promoting environmental friendliness.</p>
                    </div>
               </div>

          </section>

          <!-- Team -->
          <section class="bg-light" id="team">
               <div class="container">
                    <div class="row">
                         <div class="col-lg-12 text-center">
                              <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                              <h3 class="section-subheading text-muted"></h3>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-4">
                              <div class="team-member">
                                   <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
                                   <h4></h4>
                                   <p class="text-muted">CEO/CFO</p>
                              </div>
                         </div>
                         <div class="col-sm-4">
                              <div class="team-member">
                                   <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
                                   <h4></h4>
                                   <p class="text-muted">COO</p>
                              </div>
                         </div>
                         <div class="col-sm-4">
                              <div class="team-member">
                                   <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
                                   <h4></h4>
                                   <p class="text-muted">CIO</p>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-6">
                              <div class="team-member">
                                   <img class="mx-auto rounded-circle" src="img/team/4.jpg" alt="">
                                   <h4></h4>
                                   <p class="text-muted">CMO</p>
                              </div>
                         </div>
                         <div class="col-sm-6">
                              <div class="team-member">
                                   <img class="mx-auto rounded-circle" src="img/team/5.jpg" alt="">
                                   <h4></h4>
                                   <p class="text-muted">CTO</p>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-8 mx-auto text-center">
                                   <p class="large text-muted"></p>
                              </div>
                         </div>
                    </div>
               </section>

               <!-- Contact -->
               <section id="contact">
                    <div class="container">
                         <div class="row">
                              <div class="col-lg-12 text-center">
                                   <h2 class="section-heading text-uppercase">Contact Us</h2>
                                   <h3 class="section-subheading text-muted"></h3>
                              </div>
                         </div>
                         <div class="row">
                              <div class="col-lg-12">
                                   <?php if ($msg != "") echo "$msg<br><br>"; ?>
                                   <form class="" action="index.php" method= "post">
                                        <div class="row">
                                             <div class="col-md-6">
                                                  <div class="form-group">
                                                       <input class="form-control" id="name" type="text" name="name" placeholder="Name" required data-validation-required-message="Please enter your name.">
                                                  </div>
                                                  <div class="form-group">
                                                       <input class="form-control" id="email" type="email" name="email"placeholder="Email" required data-validation-required-message="Please enter your email address.">
                                                  </div>
                                                  <!-- <div class="form-group">
                                                       <input class="form-control" id="phone" type="tel" name="tel" placeholder="Phone" required data-validation-required-message="Please enter your phone number.">

                                                  </div> -->
                                             </div>
                                             <div class="col-md-6">
                                                  <div class="form-group">
                                                       <textarea class="form-control" id="message" name="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                                                  </div>
                                             </div>
                                             <center>
                                                  <button name="submit" id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                                             </center>
                                        </div>
                                   </form>
                              </div>
                         </div>
                         <!-- <?php if ($msg != "") echo "$msg<br><br>"; ?>
                         <form class="" action="index.php" method="post">
                              <input type="text" name="name" placeholder="Full name">
                              <input type="text" name="email" placeholder="Your email">
                              <textarea name="message" placeholder="message"></textarea>
                              <button type="submit" name="submit">SEND MAIL</button>
                         </center> -->
                         <div class = "row">
                              <div class="col-md-6">
                                   <span class="fa-stack fa-4x">
                                        <a href="https://www.facebook.com/compoober/" target="_blank">
                                             <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                             <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                        </a>
                                   </span>
                              </div>
                              <div class="col-md-6">
                                   <span class="fa-stack fa-4x">
                                        <a href="http://www.instagram.com/compoober" target="_blank">
                                             <i class="fa fa-circle fa-stack-2x text-primary" styke="color: black"></i>
                                             <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                                        </a>
                                   </span>
                              </div>
                         </div>
                    </section>

                    <!-- Portfolio Modals -->

                    <!-- Modal 1 -->
                    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                         <div class="modal-dialog">
                              <div class="modal-content">
                                   <div class="close-modal" data-dismiss="modal">
                                        <div class="lr">
                                             <div class="rl"></div>
                                        </div>
                                   </div>
                                   <div class="container">
                                        <div class="row">
                                             <div class="col-lg-8 mx-auto">
                                                  <div class="modal-body">
                                                       <!-- Project Details Go Here -->
                                                       <h2 class="text-uppercase">Clark Botanical Garden</h2>
                                                       <p class="item-intro text-muted"></p>
                                                       <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                                                       <p>Clark Botanical is a beautiful 12 acre garden. Established in 1969, it was the former estate of Grenville Clark, who donated his home to the Brooklyn Botanical Garden. The park boasts more than 5,000 species of plants, including 12 specialty garden plants, grown with environmentally friendly compost.</p>
                                                       <ul class="list-inline">
                                                            <li>Location: Albertson, New York</li>
                                                            <li></li>
                                                            <li></li>
                                                       </ul>
                                                       <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                            <i class="fa fa-times"></i>
                                                            Close</button>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <!-- Modal 2 -->
                         <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                              <div class="modal-dialog">
                                   <div class="modal-content">
                                        <div class="close-modal" data-dismiss="modal">
                                             <div class="lr">
                                                  <div class="rl"></div>
                                             </div>
                                        </div>
                                        <div class="container">
                                             <div class="row">
                                                  <div class="col-lg-8 mx-auto">
                                                       <div class="modal-body">
                                                            <!-- Project Details Go Here -->
                                                            <h2 class="text-uppercase">Brooklyn Botanical Garden</h2>
                                                            <p class="item-intro text-muted"></p>
                                                            <img class="img-fluid d-block mx-auto" src="img/portfolio/02-thumbnail.jpg" alt="">
                                                            <p>The Brooklyn Botanical Garden was founded in 1910, and it is located in the Prospect Park neighborhood in the borough of Brooklyn. Its gardens span 52 acres, and holds over 14,000 taxa of plants. Each year, over 900,000 visitors come to see this garden beauty. </p>
                                                            <ul class="list-inline">
                                                                 <li>Location: Brooklyn, New York</li>
                                                                 <li></li>
                                                                 <li></li>
                                                            </ul>
                                                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                                 <i class="fa fa-times"></i>
                                                                 Close</button>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <!-- Modal 3 -->
                              <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                                   <div class="modal-dialog">
                                        <div class="modal-content">
                                             <div class="close-modal" data-dismiss="modal">
                                                  <div class="lr">
                                                       <div class="rl"></div>
                                                  </div>
                                             </div>
                                             <div class="container">
                                                  <div class="row">
                                                       <div class="col-lg-8 mx-auto">
                                                            <div class="modal-body">
                                                                 <!-- Project Details Go Here -->
                                                                 <h2 class="text-uppercase">Queens Botanical Garden</h2>
                                                                 <p class="item-intro text-muted"></p>
                                                                 <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                                                                 <p>Founded during the 1939 New York World's Fair in Queens, the Queens Botanical Garden boasts a hefty 39 acres. Its main features are rose, bee, herb, wedding, and perennial gardens. It was designed to be an urban oasis where people, plants, and cultures can be celebrated through inspiring gardens.</p>
                                                                 <ul class="list-inline">
                                                                      <li>Location: Queens, New York</li>
                                                                      <li></li>
                                                                      <li></li>
                                                                 </ul>
                                                                 <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                                      <i class="fa fa-times"></i>
                                                                      Close</button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <!-- Modal 4 -->
                                   <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog">
                                             <div class="modal-content">
                                                  <div class="close-modal" data-dismiss="modal">
                                                       <div class="lr">
                                                            <div class="rl"></div>
                                                       </div>
                                                  </div>
                                                  <div class="container">
                                                       <div class="row">
                                                            <div class="col-lg-8 mx-auto">
                                                                 <div class="modal-body">
                                                                      <!-- Project Details Go Here -->
                                                                      <h2 class="text-uppercase">Central Park Conservatory Garden</h2>
                                                                      <p class="item-intro text-muted"></p>
                                                                      <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                                                                      <p>Located in the famous Central Park, the Central Park Conservancy is a beautiful 6 acre formal garden. It has three distinct sections with three separate styles: Italian, French, and English. The garden allows for a peaceful escape from the bustling city life, and is also a good place for intimate weddings.</p>
                                                                      <ul class="list-inline">
                                                                           <li>Location: Manhattan, New York</li>
                                                                           <li></li>
                                                                           <li></li>
                                                                      </ul>
                                                                      <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                                           <i class="fa fa-times"></i>
                                                                           Close</button>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                        <!-- Modal 5 -->
                                        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                                             <div class="modal-dialog">
                                                  <div class="modal-content">
                                                       <div class="close-modal" data-dismiss="modal">
                                                            <div class="lr">
                                                                 <div class="rl"></div>
                                                            </div>
                                                       </div>
                                                       <div class="container">
                                                            <div class="row">
                                                                 <div class="col-lg-8 mx-auto">
                                                                      <div class="modal-body">
                                                                           <!-- Project Details Go Here -->
                                                                           <h2 class="text-uppercase">Old Wesbury Garden</h2>
                                                                           <p class="item-intro text-muted"></p>
                                                                           <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                                                                           <p>The former esate of John Shaffer Phipps, the garden boasts 200 acres of formal gardens, landscaped grounds, woodlands, along with a mix of ponds and lakes. The Westbury House itself is furnished with fine English antiques and decorative arts from the long ago years of family residence. </p>
                                                                           <ul class="list-inline">
                                                                                <li>Location: Nassau County, New York</li>
                                                                                <li></li>
                                                                                <li></li>
                                                                           </ul>
                                                                           <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                                                <i class="fa fa-times"></i>
                                                                                Close</button>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>

                                             <!-- Modal 6 -->
                                             <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                                                  <div class="modal-dialog">
                                                       <div class="modal-content">
                                                            <div class="close-modal" data-dismiss="modal">
                                                                 <div class="lr">
                                                                      <div class="rl"></div>
                                                                 </div>
                                                            </div>
                                                            <div class="container">
                                                                 <div class="row">
                                                                      <div class="col-lg-8 mx-auto">
                                                                           <div class="modal-body">
                                                                                <!-- Project Details Go Here -->
                                                                                <h2 class="text-uppercase">New York Botanical Garden</h2>
                                                                                <p class="item-intro text-muted"></p>
                                                                                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                                                                                <p>A National Historic Landmark, the New York Botanical Garden features an expansive 250 acres of verdant landscape that supports over one million living plants. There are extensive collections of plants, ranging from tropical, temperate, and desert flora. Over a million visitors visit the garden per year, and it is an iconic living museum. It is one of the greatest botanical gardens in the world, and the largest in any city anywhere else in the United States.</p>
                                                                                <ul class="list-inline">
                                                                                     <li>Location: Bronx, New York</li>
                                                                                     <li></li>
                                                                                     <li></li>
                                                                                </ul>
                                                                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                                                     <i class="fa fa-times"></i>
                                                                                     Close</button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div>

                                                  <!-- Bootstrap core JavaScript -->
                                                  <script src="vendor/jquery/jquery.min.js"></script>
                                                  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                                                  <!-- Plugin JavaScript -->
                                                  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

                                                  <!-- Contact form JavaScript -->
                                                  <script src="js/jqBootstrapValidation.js"></script>
                                                  <script src="js/contact_me.js"></script>

                                                  <!-- Custom scripts for this template -->
                                                  <script src="js/agency.min.js"></script>

                                             </body>

                                             </html>
