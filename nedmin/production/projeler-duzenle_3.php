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
                        <h2>Proje Duzenle 3<small>

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
                                    if (strlen($projelercek['projeler_img_3']) > 0) { ?>

                                        <img width="200" src="../../<?php echo $projelercek['projeler_img_3']; ?>">

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
                                    <input type="file" id="first-name" name="projeler_img_3"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <input type="hidden" name="eski_yol" value="<?php echo $projelercek['projeler_img_3']; ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="projelerfotoduzenle_3" class="btn btn-primary">Güncelle</button>
                            </div>

                        </form>

                        <hr>


                        <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ust Baslik <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="projeler_ustbaslik_3"
                                        value="<?php echo $projelercek["projeler_ustbaslik_3"] ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Baslik <span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="projeler_baslik_3"
                                        value="<?php echo $projelercek["projeler_baslik_3"] ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Aciklama<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" name="projeler_aciklama_3"
                                        value="<?php echo $projelercek["projeler_aciklama_3"] ?>" required="required"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                    <button type="submit" name="projelerkaydet_3" class="btn btn-success">Guncelle</button>
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