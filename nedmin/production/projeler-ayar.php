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
                        <h2>Projeler<small>

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

                        <!-- Div Icerik Baslangic -->


                        <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap"
                            cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>Sira No</th>
                                    <th>Resim</th>
                                    <th>Ust Baslik</th>
                                    <th>Ana Baslik</th>
                                    <th>Aciklama</th>
                                  
                                </tr>
                            </thead>

                            <tbody>

                                

                                
                                <tr>
                                    <td width="20"><?php echo "1" ?></td>
                                    <td><img width="200" src="../../<?php echo $projelercek["projeler_img_1"] ?>" alt="projeler"></td>
                                    <td><?php echo $projelercek["projeler_ustbaslik_1"] ?></td>
                                    <td><?php echo $projelercek["projeler_baslik_1"] ?></td>
                                    <td><?php echo $projelercek["projeler_aciklama_1"] ?></td>
                                    <td align="right"><center>
                                        <a href="projeler-duzenle_1.php"><button class="btn btn-primary btn-xs">Duzenle</button></a>
                                        <a href="alt-projeler-duzenle_1.php"><button class="btn btn-success btn-xs">Alt Proje</button>
                                    </center></td>

                                </tr>

                                <tr>
                                    <td width="20"><?php echo "2" ?></td>
                                    <td><img width="200" src="../../<?php echo $projelercek["projeler_img_2"] ?>" alt="projeler"></td>
                                    <td><?php echo $projelercek["projeler_ustbaslik_2"] ?></td>
                                    <td><?php echo $projelercek["projeler_baslik_2"] ?></td>
                                    <td><?php echo $projelercek["projeler_aciklama_2"] ?></td>
                                    <td align="right"><center>
                                        <a href="projeler-duzenle_2.php"><button class="btn btn-primary btn-xs">Duzenle</button></a>
                                        <a href="alt-projeler-duzenle_2.php"><button class="btn btn-success btn-xs">Alt Proje</button>
                                    </center></td>

                                </tr>

                                <tr>
                                    <td width="20"><?php echo "3" ?></td>
                                    <td><img width="200" src="../../<?php echo $projelercek["projeler_img_3"] ?>" alt="projeler"></td>
                                    <td><?php echo $projelercek["projeler_ustbaslik_3"] ?></td>
                                    <td><?php echo $projelercek["projeler_baslik_3"] ?></td>
                                    <td><?php echo $projelercek["projeler_aciklama_3"] ?></td>
                                    <td align="right"><center>
                                        <a href="projeler-duzenle_3.php"><button class="btn btn-primary btn-xs">Duzenle</button></a>
                                        <a href="alt-projeler-duzenle_3.php"><button class="btn btn-success btn-xs">Alt Proje</button>
                                    </center></td>


                                </tr>

                                <tr>
                                    <td width="20"><?php echo "4" ?></td>
                                    <td><img width="200" src="../../<?php echo $projelercek["projeler_img_4"] ?>" alt="projeler"></td>
                                    <td><?php echo $projelercek["projeler_ustbaslik_4"] ?></td>
                                    <td><?php echo $projelercek["projeler_baslik_4"] ?></td>
                                    <td><?php echo $projelercek["projeler_aciklama_4"] ?></td>
                                    <td align="right"><center>
                                        <a href="projeler-duzenle_4.php"><button class="btn btn-primary btn-xs">Duzenle</button></a>
                                        <a href="alt-projeler-duzenle_4.php"><button class="btn btn-success btn-xs">Alt Proje</button>
                                    </center></td>

                                </tr>
                                
                                
                                
                            </tbody>
                        </table>
                        


                        <!-- Div Icerik Bitis -->





                    </div>
                </div>
            </div>





        </div>
    </div>
</div>










<?php include "footer.php"; ?>