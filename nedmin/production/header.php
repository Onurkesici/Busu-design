<?php

include "../netting/baglan.php";
ob_start();
session_start();

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

// $projesor = $db->prepare("SELECT * FROM proje where proje_id=:id");
// $projesor->execute(
//     array(
//         "id" => 0
//     )
// );
// $projecek = $projesor->fetch(PDO::FETCH_ASSOC);

$kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
$kullanicisor->execute(
    array(
        "mail" => $_SESSION["kullanici_mail"]
    )
);
$say = $kullanicisor->rowCount();
$kullanicicek = $kullanicisor->fetch(PDO::FETCH_ASSOC);

if ($say == 0) {

    header("Location:login.php?durum=izinsiz");
    exit;

}

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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $ayarcek["ayar_title"] ?> </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://imgs.search.brave.com/UDFR8g_30b1ryqw6V8LszBEQDCtWoj69nQ-k-NUsHvI/rs:fit:880:1060:1/g:ce/aHR0cHM6Ly93d3cu/cGluY2xpcGFydC5j/b20vcGljZGlyL21p/ZGRsZS8xMjItMTIy/MTI2MV9hZG1pbi1z/dmctcG5nLWljb24t/ZnJlZS1kb3dubG9h/ZC0zMjU3ODgtc3Vu/bnkucG5n" type="image/svg+xml">


    <!-- 
    - CK Editor 
  -->
    <script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><strong><span><?php echo $ayarcek["ayar_title"] ?></span></strong></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_pic">
                            <img src="../../<?php echo $homecek["home_img"] ?>" alt="..." class="img-circle profile_img">
                        </div>
                        <div class="profile_info">
                            <span>Hosgeldin,</span>
                            <h2><?php echo $kullanicicek["kullanici_adsoyad"] ?></h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>General</h3>
                            <ul class="nav side-menu">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i>Anasayfa</a>
                                </li>
                                <li><a><i class="fa fa-cogs"></i> Site Ayarlari<span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="genel-ayar.php">Genel Ayarlar</a></li>
                                        <li><a href="iletisim-ayar.php">Iletisim Ayarlari</a></li>
                                        <li><a href="sosyal-ayar.php">Sosyal Medya Linkleri</a></li>
                                        <li><a href="mail-ayar.php">Mail Ayarlari</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about-ayar.php"><i class="fa fa-info"></i>Hakkimizda</a>
                                </li>
                                <li>
                                    <a href="projeler-ayar.php"><i class="fa fa-image"></i>Projeler</a>
                                </li>
                                <li>
                                    <a href="mail-alt-ayar.php"><i class="fa fa-comments"></i>Mail Aciklama</a>
                                </li>
                            </ul>

                        </div>


                    </div>
                    <!-- /sidebar menu -->

                   
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <nav>
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="../../<?php echo $homecek["home_img"] ?>" alt=""><?php echo $kullanicicek["kullanici_adsoyad"] ?>
                                    <span class=" fa fa-angle-down"></span>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu pull-right">
                                    
                                    <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i>Guvenli Cikis</a></li>
                                </ul>
                            </li>

                            
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->