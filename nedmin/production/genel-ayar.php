<?php include "header.php" ?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Genel Ayar<small>

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

                        <form action="../netting/islem.php" method="POST" enctype="multipart/form-data"
                            data-parsley-validate class="form-horizontal form-label-left">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü
                                    Logo<br><span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">

                                    <?php
                                    if (strlen($ayarcek['ayar_logo']) > 0) { ?>

                                        <img width="200" src="../../<?php echo $ayarcek['ayar_logo']; ?>">

                                    <?php } else { ?>


                                        <img width="200" src="../../dimg/busu-dark.png">


                                    <?php } ?>


                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" name="ayar_logo"
                                        class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <input type="hidden" name="eski_yol" value="<?php echo $ayarcek['ayar_logo']; ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="logoduzenle" class="btn btn-primary">Güncelle</button>
                            </div>

                        </form>

                        <hr>

                        <form action="../netting/islem.php" method="POST" class="form-horizontal form-label-left" novalidate>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Basligi<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_title"
                                        value="<?php echo $ayarcek["ayar_title"] ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Aciklamasi<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_description"
                                        value="<?php echo $ayarcek["ayar_description"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Anahtar
                                    Kelime<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_keywords"
                                        value="<?php echo $ayarcek["ayar_keywords"] ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Site Yazar<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_author"
                                        value="<?php echo $ayarcek["ayar_author"] ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div align="right" class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" name="genelayarkaydet" class="btn btn-success">Guncelle</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->


<?php include "footer.php" ?>