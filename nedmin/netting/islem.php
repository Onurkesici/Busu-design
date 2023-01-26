<?php

include "baglan.php";
ob_start();
session_start();


if (isset($_POST["admingiris"])) {


    $kullanici_mail = $_POST["kullanici_mail"];
    $kullanici_password = md5($_POST["kullanici_password"]);

    $kullanicisor = $db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail and kullanici_password=:password and kullanici_yetki=:yetki");
    $kullanicisor->execute(
        array(
            "mail" => $kullanici_mail,
            "password" => $kullanici_password,
            "yetki" => 5
        )
    );

    echo $say = $kullanicisor->rowCount();

    if ($say == 1) {

        $_SESSION["kullanici_mail"] = $kullanici_mail;
        header("Location:../production/index.php");

    } else {

        header("Location:../production/login.php?durum=no");

    }

}


if (isset($_POST["genelayarkaydet"])) {

    $ayarkaydet = $db->prepare("UPDATE ayar SET

        ayar_title=:ayar_title,
        ayar_description=:ayar_description,
        ayar_keywords=:ayar_keywords,
        ayar_author=:ayar_author 
        WHERE ayar_id=0");

    $update = $ayarkaydet->execute(
        array(
            "ayar_title" => $_POST["ayar_title"],
            "ayar_description" => $_POST["ayar_description"],
            "ayar_keywords" => $_POST["ayar_keywords"],
            "ayar_author" => $_POST["ayar_author"]
        )
    );

    if ($update) {

        header("Location:../production/genel-ayar.php?durum=ok");

    } else {

        header("Location:../production/genel-ayar.php?durum=no");

    }


}

if (isset($_POST["iletisimayarkaydet"])) {

    $ayarkaydet = $db->prepare("UPDATE ayar SET

        ayar_tel=:ayar_tel,
        ayar_mail=:ayar_mail
        WHERE ayar_id=0");

    $update = $ayarkaydet->execute(
        array(
            "ayar_tel" => $_POST["ayar_tel"],
            "ayar_mail" => $_POST["ayar_mail"]
        )
    );

    if ($update) {

        header("Location:../production/iletisim-ayar.php?durum=ok");

    } else {

        header("Location:../production/iletisim-ayar.php?durum=no");

    }


}

if (isset($_POST["sosyalayarkaydet"])) {

    $ayarkaydet = $db->prepare("UPDATE ayar SET

        ayar_linkedin=:ayar_linkedin,
        ayar_github=:ayar_github,
        ayar_instagram=:ayar_instagram
        WHERE ayar_id=0");

    $update = $ayarkaydet->execute(
        array(
            "ayar_linkedin" => $_POST["ayar_linkedin"],
            "ayar_github" => $_POST["ayar_github"],
            "ayar_instagram" => $_POST["ayar_instagram"]
        )
    );

    if ($update) {

        header("Location:../production/sosyal-ayar.php?durum=ok");

    } else {

        header("Location:../production/sosyal-ayar.php?durum=no");

    }


}

if (isset($_POST["mailayarkaydet"])) {

    $ayarkaydet = $db->prepare("UPDATE ayar SET

        ayar_smtphost=:ayar_smtphost,
        ayar_smtpuser=:ayar_smtpuser,
        ayar_smtppassword=:ayar_smtppassword,
        ayar_smtpport=:ayar_smtpport
        WHERE ayar_id=0");

    $update = $ayarkaydet->execute(
        array(
            "ayar_smtphost" => $_POST["ayar_smtphost"],
            "ayar_smtpuser" => $_POST["ayar_smtpuser"],
            "ayar_smtppassword" => $_POST["ayar_smtppassword"],
            "ayar_smtpport" => $_POST["ayar_smtpport"]
        )
    );

    if ($update) {

        header("Location:../production/mail-ayar.php?durum=ok");

    } else {

        header("Location:../production/maiil-ayar.php?durum=no");

    }


}

if (isset($_POST["mailaltayarkaydet"])) {

    $ayarkaydet = $db->prepare("UPDATE ayar SET

        ayar_mail_alt=:ayar_mail_alt,
        ayar_mail_alt_aciklama=:ayar_mail_alt_aciklama
        WHERE ayar_id=0");

    $update = $ayarkaydet->execute(
        array(
            "ayar_mail_alt" => $_POST["ayar_mail_alt"],
            "ayar_mail_alt_aciklama" => $_POST["ayar_mail_alt_aciklama"]
        )
    );

    if ($update) {

        header("Location:../production/mail-alt-ayar.php?durum=ok");

    } else {

        header("Location:../production/mail-alt-ayar.php?durum=no");

    }


}


if (isset($_POST['logoduzenle'])) {



    $uploads_dir = '../../dimg';

    @$tmp_name = $_FILES['ayar_logo']["tmp_name"];
    @$name = $_FILES['ayar_logo']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE ayar SET
		ayar_logo=:logo
		WHERE ayar_id=0");
    $update = $duzenle->execute(
        array(
            'logo' => $refimgyol
        )
    );



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/genel-ayar.php?durum=ok");

    } else {

        Header("Location:../production/genel-ayar.php?durum=no");
    }

}


if (isset($_POST['homefotoduzenle'])) {



    $uploads_dir = '../../dimg';

    @$tmp_name = $_FILES['home_img']["tmp_name"];
    @$name = $_FILES['home_img']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE home SET
		home_img=:foto
		WHERE home_id=0");
    $update = $duzenle->execute(
        array(
            'foto' => $refimgyol
        )
    );



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/index.php?durum=ok");

    } else {

        Header("Location:../production/index.php?durum=no");
    }

}


if (isset($_POST["homekaydet"])) {

    $homekaydet = $db->prepare("UPDATE home SET

        home_baslik=:home_baslik,
        home_icerik=:home_icerik
        WHERE home_id=0");

    $update = $homekaydet->execute(
        array(
            "home_baslik" => $_POST["home_baslik"],
            "home_icerik" => $_POST["home_icerik"]
        )
    );

    if ($update) {

        header("Location:../production/index.php?durum=ok");

    } else {

        header("Location:../production/index.php?durum=no");

    }


}


if (isset($_POST["aboutayarkaydet"])) {

    $homekaydet = $db->prepare("UPDATE about SET

        about_baslik=:about_baslik,
        about_aciklama=:about_aciklama,
        about_progress_1=:about_progress_1,
        about_label_1=:about_label_1,
        about_alt_1=:about_alt_1,
        about_progress_2=:about_progress_2,
        about_label_2=:about_label_2,
        about_alt_2=:about_alt_2,
        about_progress_3=:about_progress_3,
        about_label_3=:about_label_3,
        about_alt_3=:about_alt_3,
        about_progress_4=:about_progress_4,
        about_label_4=:about_label_4,
        about_alt_4=:about_alt_4
        WHERE about_id=0");

    $update = $homekaydet->execute(
        array(
            "about_baslik" => $_POST["about_baslik"],
            "about_aciklama" => $_POST["about_aciklama"],
            "about_progress_1" => $_POST["about_progress_1"],
            "about_label_1" => $_POST["about_label_1"],
            "about_alt_1" => $_POST["about_alt_1"],
            "about_progress_2" => $_POST["about_progress_2"],
            "about_label_2" => $_POST["about_label_2"],
            "about_alt_2" => $_POST["about_alt_2"],
            "about_progress_3" => $_POST["about_progress_3"],
            "about_label_3" => $_POST["about_label_3"],
            "about_alt_3" => $_POST["about_alt_3"],
            "about_progress_4" => $_POST["about_progress_4"],
            "about_label_4" => $_POST["about_label_4"],
            "about_alt_4" => $_POST["about_alt_4"]
        )
    );

    if ($update) {

        header("Location:../production/about-ayar.php?durum=ok");

    } else {

        header("Location:../production/about-ayar.php?durum=no");

    }


}













if (isset($_POST['projelerfotoduzenle_1'])) {



    $uploads_dir = '../../dimg/projeler';

    @$tmp_name = $_FILES['projeler_img_1']["tmp_name"];
    @$name = $_FILES['projeler_img_1']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE projeler SET
		projeler_img_1=:foto
		WHERE projeler_id=0");
    $update = $duzenle->execute(
        array(
            'foto' => $refimgyol
        )
    );



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/projeler-duzenle_1.php?durum=ok");

    } else {

        Header("Location:../production/projeler-duzenle_1.php?durum=no");
    }

}


if (isset($_POST["projelerkaydet_1"])) {

    $projelerkaydet = $db->prepare("UPDATE projeler SET

        projeler_ustbaslik_1=:projeler_ustbaslik_1,
    	projeler_baslik_1=:projeler_baslik_1,
    	projeler_aciklama_1=:projeler_aciklama_1
        WHERE projeler_id=0");

    $update = $projelerkaydet->execute(
        array(
            'projeler_ustbaslik_1' => $_POST['projeler_ustbaslik_1'],
            'projeler_baslik_1' => $_POST['projeler_baslik_1'],
            'projeler_aciklama_1' => $_POST['projeler_aciklama_1']
        )
    );

    if ($update) {

        header("Location:../production/projeler-duzenle_1.php?durum=ok");

    } else {

        header("Location:../production/projeler-duzenle_1.php?durum=no");

    }


}





if (isset($_POST['projelerfotoduzenle_2'])) {



    $uploads_dir = '../../dimg/projeler';

    @$tmp_name = $_FILES['projeler_img_2']["tmp_name"];
    @$name = $_FILES['projeler_img_2']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE projeler SET
		projeler_img_2=:foto
		WHERE projeler_id=0");
    $update = $duzenle->execute(
        array(
            'foto' => $refimgyol
        )
    );



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/projeler-duzenle_2.php?durum=ok");

    } else {

        Header("Location:../production/projeler-duzenle_2.php?durum=no");
    }

}


if (isset($_POST["projelerkaydet_2"])) {

    $projelerkaydet = $db->prepare("UPDATE projeler SET

        projeler_ustbaslik_2=:projeler_ustbaslik_2,
    	projeler_baslik_2=:projeler_baslik_2,
    	projeler_aciklama_2=:projeler_aciklama_2
        WHERE projeler_id=0");

    $update = $projelerkaydet->execute(
        array(
            'projeler_ustbaslik_2' => $_POST['projeler_ustbaslik_2'],
            'projeler_baslik_2' => $_POST['projeler_baslik_2'],
            'projeler_aciklama_2' => $_POST['projeler_aciklama_2']
        )
    );

    if ($update) {

        header("Location:../production/projeler-duzenle_2.php?durum=ok");

    } else {

        header("Location:../production/projeler-duzenle_2.php?durum=no");

    }


}






if (isset($_POST['projelerfotoduzenle_3'])) {



    $uploads_dir = '../../dimg/projeler';

    @$tmp_name = $_FILES['projeler_img_3']["tmp_name"];
    @$name = $_FILES['projeler_img_3']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE projeler SET
		projeler_img_3=:foto
		WHERE projeler_id=0");
    $update = $duzenle->execute(
        array(
            'foto' => $refimgyol
        )
    );



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/projeler-duzenle_3.php?durum=ok");

    } else {

        Header("Location:../production/projeler-duzenle_3.php?durum=no");
    }

}


if (isset($_POST["projelerkaydet_3"])) {

    $projelerkaydet = $db->prepare("UPDATE projeler SET

        projeler_ustbaslik_3=:projeler_ustbaslik_3,
    	projeler_baslik_3=:projeler_baslik_3,
    	projeler_aciklama_3=:projeler_aciklama_3
        WHERE projeler_id=0");

    $update = $projelerkaydet->execute(
        array(
            'projeler_ustbaslik_3' => $_POST['projeler_ustbaslik_3'],
            'projeler_baslik_3' => $_POST['projeler_baslik_3'],
            'projeler_aciklama_3' => $_POST['projeler_aciklama_3']
        )
    );

    if ($update) {

        header("Location:../production/projeler-duzenle_3.php?durum=ok");

    } else {

        header("Location:../production/projeler-duzenle_3.php?durum=no");

    }


}

           
 
if (isset($_POST['projelerfotoduzenle_4'])) {



    $uploads_dir = '../../dimg/projeler';

    @$tmp_name = $_FILES['projeler_img_4']["tmp_name"];
    @$name = $_FILES['projeler_img_4']["name"];

    $benzersizsayi4 = rand(20000, 32000);
    $refimgyol = substr($uploads_dir, 6) . "/" . $benzersizsayi4 . $name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$benzersizsayi4$name");


    $duzenle = $db->prepare("UPDATE projeler SET
		projeler_img_4=:foto
		WHERE projeler_id=0");
    $update = $duzenle->execute(
        array(
            'foto' => $refimgyol
        )
    );



    if ($update) {

        $resimsilunlink = $_POST['eski_yol'];
        unlink("../../$resimsilunlink");

        Header("Location:../production/projeler-duzenle_4.php?durum=ok");

    } else {

        Header("Location:../production/projeler-duzenle_4.php?durum=no");
    }

}


if (isset($_POST["projelerkaydet_4"])) {

    $projelerkaydet = $db->prepare("UPDATE projeler SET

        projeler_ustbaslik_4=:projeler_ustbaslik_4,
    	projeler_baslik_4=:projeler_baslik_4,
    	projeler_aciklama_4=:projeler_aciklama_4
        WHERE projeler_id=0");

    $update = $projelerkaydet->execute(
        array(
            'projeler_ustbaslik_4' => $_POST['projeler_ustbaslik_4'],
            'projeler_baslik_4' => $_POST['projeler_baslik_4'],
            'projeler_aciklama_4' => $_POST['projeler_aciklama_4']
        )
    );

    if ($update) {

        header("Location:../production/projeler-duzenle_4.php?durum=ok");

    } else {

        header("Location:../production/projeler-duzenle_4.php?durum=no");

    }


}
?>