<?php  
  include "connection.php"; 
  include "functions/header-functions.php";
  include "functions/menubar_functions.php";

  $contact_email = fetch_topbar('contact_email');
  $contact_number = fetch_topbar('contact_number');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Impact Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Impact
  * Updated: Jan 30 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/impact-bootstrap-business-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <section id="topbar" class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><a href="mailto:<?php echo $contact_number; ?>"><?php echo $contact_number; ?></a></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section><!-- End Top Bar -->

  <header id="header" class="header d-flex align-items-center">

    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->

        <?php
          $logo_text = fetch_menu('logo_text');
          $menu_home = fetch_menu('menu_home');
          $menu_home_link = fetch_menu('menu_home_link');
          $menu_about = fetch_menu('menu_about');
          $menu_about_link = fetch_menu('menu_about_link');
          $menu_services = fetch_menu('menu_services');
          $menu_services_link = fetch_menu('menu_services_link');
          $menu_portfolio = fetch_menu('menu_portfolio');
          $menu_portfolio_link = fetch_menu('menu_portfolio_link');
          $menu_team = fetch_menu('menu_team');
          $menu_team_link = fetch_menu('menu_team_link');
          $menu_blog = fetch_menu('menu_blog');
          $menu_blog_link = fetch_menu('menu_blog_link');
          $menu_contact = fetch_menu('menu_contact');
          $menu_contact_link = fetch_menu('menu_contact_link');

        ?>





        <h1><?php echo $logo_text ?><span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="<?php echo $menu_home_link ?>"><?php echo $menu_home ?></a></li>
          <li><a href="<?php echo $menu_about_link ?>"><?php echo $menu_about ?></a></li>
          <li><a href="<?php echo $menu_services_link ?>"><?php echo $menu_services ?></a></li>
          <li><a href="<?php echo $menu_portfolio_link ?>"><?php echo $menu_portfolio ?></a></li>
          <li><a href="<?php echo $menu_team_link ?>"><?php echo $menu_team ?></a></li>
          <li><a href="<?php echo $menu_blog_link ?>"><?php echo $menu_blog ?></a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="<?php echo $menu_contact_link ?>"><?php echo $menu_contact ?></a></li>
        </ul>
      </nav><!-- .navbar -->

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

    </div>
  </header><!-- End Header -->
  <!-- End Header -->