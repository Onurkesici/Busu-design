<?php

include "header.php";



?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Alt Proje Duzenle 1<small>

                                <?php

                                if ($_GET["durum"] == "ok") { ?>

                                    <b style="color: green;">Islem Basarili...</b>

                                <?php } elseif ($_GET["durum"] == "no") { ?>

                                    <b style="color: green;">Islem Basarisiz...</b>

                                <?php }

                                ?>

                            </small></h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />


                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"
                            data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü
                                    Logo<br><span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <?php
                                    if (strlen($altprojecek['projeler_img_1']) > 0) { ?>

                                        <img width="200" src="../../<?php echo $altprojecek['projeler_img_1'] ?>">

                                    <?php } else { ?>


                                        <center> <img width="200" src="../../dimg/busu.jpg"></center>


                                    <?php } ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="projeler_img_1"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <input type="hidden" name="eski_yol" value="<?php echo $altprojecek['projeler_img_1'] ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="projelerfotoduzenle_1"
                                    class="btn btn-primary">Güncelle</button>
                            </div>

                        </form>

                        <hr>

                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"
                            data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü
                                    Logo<br><span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <?php
                                    if (strlen($altprojecek['projeler_img_1']) > 0) { ?>

                                        <img width="200" src="../../<?php echo $altprojecek['projeler_img_1'] ?>">

                                    <?php } else { ?>


                                        <center> <img width="200" src="../../dimg/busu.jpg"></center>


                                    <?php } ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="projeler_img_1"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <input type="hidden" name="eski_yol" value="<?php echo $altprojecek['projeler_img_1'] ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="projelerfotoduzenle_1"
                                    class="btn btn-primary">Güncelle</button>
                            </div>

                        </form>

                        <hr>

                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"
                            data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü
                                    Logo<br><span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <?php
                                    if (strlen($altprojecek['projeler_img_1']) > 0) { ?>

                                        <img width="200" src="../../<?php echo $altprojecek['projeler_img_1'] ?>">

                                    <?php } else { ?>


                                        <center> <img width="200" src="../../dimg/busu.jpg"></center>


                                    <?php } ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="projeler_img_1"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <input type="hidden" name="eski_yol" value="<?php echo $altprojecek['projeler_img_1'] ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="projelerfotoduzenle_1"
                                    class="btn btn-primary">Güncelle</button>
                            </div>

                        </form>

                        <hr>

                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"
                            data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü
                                    Logo<br><span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <?php
                                    if (strlen($altprojecek['projeler_img_1']) > 0) { ?>

                                        <img width="200" src="../../<?php echo $altprojecek['projeler_img_1'] ?>">

                                    <?php } else { ?>


                                        <center> <img width="200" src="../../dimg/busu.jpg"></center>


                                    <?php } ?>

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="projeler_img_1"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <input type="hidden" name="eski_yol" value="<?php echo $altprojecek['projeler_img_1'] ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="projelerfotoduzenle_1"
                                    class="btn btn-primary">Güncelle</button>
                            </div>

                        </form>

                        <hr>


                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Baslik <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="alt_proje_baslik1"
                                        value="<?php echo $altprojecek["alt_proje_baslik1"] ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Aciklama<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="alt_proje_aciklama1"
                                        value="<?php echo $altprojecek["alt_proje_aciklama1"] ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Link<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="alt_proje_link1"
                                        value="<?php echo $altprojecek["alt_proje_link1"] ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="projelerkaydet_1"
                                        class="btn btn-success">Guncelle</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>




        </div>
    </div>
</div>










<?php include "footer.php"; ?>

