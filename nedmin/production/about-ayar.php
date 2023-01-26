<?php include "header.php" ?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Hakkimizda Ayar<small>

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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Baslik<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_baslik"
                                        value="<?php echo $aboutcek["about_baslik"] ?>" required="required" type="text">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Aciklama<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_aciklama"
                                        value="<?php echo $aboutcek["about_aciklama"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>

                            <hr>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="name">Sutun 1 Aciklama<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_progress_1"
                                        value="<?php echo $aboutcek["about_progress_1"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sutun 1 Yuzde (%)<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_label_1"
                                        value="<?php echo $aboutcek["about_label_1"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alt Aciklama 1<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_alt_1"
                                        value="<?php echo $aboutcek["about_alt_1"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>

                            <hr>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="name">Sutun 2 Aciklama<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_progress_2"
                                        value="<?php echo $aboutcek["about_progress_2"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sutun 2 Yuzde (%)<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_label_2"
                                        value="<?php echo $aboutcek["about_label_2"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alt Aciklama 2<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_alt_2"
                                        value="<?php echo $aboutcek["about_alt_2"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>

                            <hr>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="name">Sutun 3 Aciklama<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_progress_3"
                                        value="<?php echo $aboutcek["about_progress_3"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sutun 3 Yuzde (%)<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_label_3"
                                        value="<?php echo $aboutcek["about_label_3"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alt Aciklama 3<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_alt_3"
                                        value="<?php echo $aboutcek["about_alt_3"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>

                            <hr>

                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12"
                                    for="name">Sutun 4 Aciklama<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_progress_4"
                                        value="<?php echo $aboutcek["about_progress_4"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sutun 4 Yuzde (%)<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_label_4"
                                        value="<?php echo $aboutcek["about_label_4"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Alt Aciklama 4<span
                                        class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input id="name" class="form-control col-md-7 col-xs-12"
                                        data-validate-length-range="6" data-validate-words="2" name="about_alt_4"
                                        value="<?php echo $aboutcek["about_alt_4"] ?>" required="required"
                                        type="text">
                                </div>
                            </div>



                            <div class="ln_solid"></div>
                            <div align="right" class="form-group">
                                <div class="col-md-6 col-md-offset-3">
                                    <button id="send" type="submit" name="aboutayarkaydet"
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