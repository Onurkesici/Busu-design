<?php include "header.php" ?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Iletisim Ayar<small>

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


                        <form action="../netting/islem.php" method="POST" class="form-horizontal form-label-left"
                            novalidate>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Telefon
                                    Numarasi<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_tel"
                                        value="<?php echo $ayarcek["ayar_tel"] ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Mail Adresi<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_mail"
                                        value="<?php echo $ayarcek["ayar_mail"] ?>" required="required" type="mail">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div align="right" class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" name="iletisimayarkaydet"
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
<!-- /page content -->


<?php include "footer.php" ?>