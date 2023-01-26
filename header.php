<?php
ob_start();
session_start();

include "nedmin/netting/baglan.php";


$ayarsor = $db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(
  array(
    "id" => 0
  )
);
$ayarcek = $ayarsor->fetch(PDO::FETCH_ASSOC);


$homesor = $db->prepare("SELECT * FROM home where home_id=:id");
$homesor->execute(
  array(
    "id" => 0
  )
);
$homecek = $homesor->fetch(PDO::FETCH_ASSOC);


$aboutsor = $db->prepare("SELECT * FROM about where about_id=:id");
$aboutsor->execute(
  array(
    "id" => 0
  )
);
$aboutcek = $aboutsor->fetch(PDO::FETCH_ASSOC);


$projelersor = $db->prepare("SELECT * FROM projeler where projeler_id=:id ");
$projelersor->execute(
  array(
    "id" => 0
  )
);
$projelercek = $projelersor->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>
    <?php echo $ayarcek["ayar_title"] ?>
  </title>
  <meta name="title" content="Busu Design">
  <meta name="description" content="Hello, I'm busra, welcome to my website">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="dimg/logo.png" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;700&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - CK Editor 
  -->
  <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">
  <link rel="preload" as="image" href="./assets/images/Blog.svg">

</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="index.php" class="logo">
        <img src="<?php echo $ayarcek["ayar_logo"] ?>" width="64" height="24" alt="busu">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img src="dimg/busu-light.png" width="64" height="24" alt="busu">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="#about" class="navbar-link">About</a>
          </li>

          <li>
            <a href="#project" class="navbar-link">Projects</a>
          </li>

          <li>
            <a href="#contact" class="navbar-link">Contact</a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="mailto:<?php echo $ayarcek["ayar_mail"] ?>" class="contact-link">
            <?php echo $ayarcek["ayar_mail"] ?>
          </a>

          <!-- <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a> -->
        </div>

        <ul class="social-list">

          <li>
            <a href="<?php echo $ayarcek["ayar_linkedin"] ?>" target="_blank" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li>
            <a href="<?php echo $ayarcek["ayar_github"] ?>" target="_blank" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li>
            <a href="<?php echo $ayarcek["ayar_instagram"] ?>" target="_blank" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>