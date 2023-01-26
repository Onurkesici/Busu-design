<?php include "header.php" ?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Mail Ayar<small>

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


                        <form action="../netting/islem.php" method="POST" class="form-horizontal form-label-left" novalidate>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Smtp Host<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_smtphost"
                                        value="<?php echo $ayarcek["ayar_smtphost"] ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Smtp User<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_smtpuser"
                                        value="<?php echo $ayarcek["ayar_smtpuser"] ?>" required="required" type="mail">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Smtp Password<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_smtppassword"
                                        value="<?php echo $ayarcek["ayar_smtppassword"] ?>" required="required" type="mail">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Smtp Port<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="ayar_smtpport"
                                        value="<?php echo $ayarcek["ayar_smtpport"] ?>" required="required" type="mail">
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div align="right" class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" name="mailayarkaydet"
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