<?php

include "header.php";


?>

<main>
    <article>

        <!-- 
        - #HERO
      -->

        <section class="section hero" aria-label="home">
            <div class="container">

                <figure class="hero-banner">
                    <img src="<?php echo $homecek["home_img"] ?>" width="560" height="540" alt="Büşra" class="w-100"
                        data-reveal="top" draggable="false">

                    <img src="./assets/images/hero-shape-1.png" width="203" height="91" alt="250+ Projects Done"
                        class="shape" data-reveal="top" data-reveal-delay="0.25s">
                </figure>

                <div class="hero-content">

                    <h1 class="h1 hero-title" data-reveal="top" data-reveal-delay="0.5s">
                        <?php echo $homecek["home_baslik"] ?>
                    </h1>

                    <p class="section-text" data-reveal="top" data-reveal-delay="0.75s">
                        <?php echo $homecek["home_icerik"] ?>
                        <!-- I am Busra, an interior architect and designer with a keen eye for art. Learning means new
                        experiences for me. -->
                    </p>

                    <div class="btn-wrapper" data-reveal="top" data-reveal-delay="1s">
                        <a href="#project" class="btn btn-primary">See My Works</a>

                        <a href="#contact" class="btn btn-secondary">Contact Me</a>
                    </div>

                </div>

            </div>
        </section>





        <!-- 
        - #ABOUT
      -->

        <section class="section about" aria-label="about" id="about">
            <div class="container">

                <div class="wrapper">

                    <div data-reveal="left">
                        <h2 class="h2 section-title"><?php echo $aboutcek["about_baslik"] ?></h2>

                        <p class="section-text">
                            <?php echo $aboutcek["about_aciklama"] ?>
                        </p>
                    </div>

                    <ul class="progress-list" data-reveal="right">

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p><?php echo $aboutcek["about_progress_1"] ?></p>

                                <span class="span"><?php echo $aboutcek["about_label_1"] ?> %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: <?php echo $aboutcek["about_label_1"] ?>%; background-color: #c05301a3"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p><?php echo $aboutcek["about_progress_2"] ?></p>

                                <span class="span"><?php echo $aboutcek["about_label_2"] ?> %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: <?php echo $aboutcek["about_label_2"] ?>%; background-color: #6271ac9e"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p><?php echo $aboutcek["about_progress_3"] ?></p>

                                <span class="span"><?php echo $aboutcek["about_label_3"] ?> %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: <?php echo $aboutcek["about_label_3"] ?>%; background-color: #777e5296"></div>
                            </div>

                        </li>

                        <li class="progress-item">

                            <div class="label-wrapper">
                                <p><?php echo $aboutcek["about_progress_4"] ?></p>

                                <span class="span"><?php echo $aboutcek["about_label_4"] ?> %</span>
                            </div>

                            <div class="progress">
                                <div class="progress-fill" style="width: <?php echo $aboutcek["about_label_4"] ?>%; background-color: #74637c8a"></div>
                            </div>

                        </li>

                    </ul>

                </div>

                <ul class="grid-list">

                    <li data-reveal="bottom">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="./assets/images/icon-4.png" width="52" height="52" loading="lazy"
                                    alt="web design icon">
                            </div>

                            <h3 class="h4 card-title"><?php echo $aboutcek["about_progress_1"] ?></h3>

                            <p class="card-text">
                                <?php echo $aboutcek["about_alt_1"] ?>
                            </p>

                        </div>
                    </li>

                    <li data-reveal="bottom" data-reveal-delay="0.25s">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="./assets/images/icon-3.svg" width="52" height="52" loading="lazy"
                                    alt="mobile design icon">
                            </div>

                            <h3 class="h4 card-title"><?php echo $aboutcek["about_progress_2"] ?></h3>

                            <p class="card-text">
                                <?php echo $aboutcek["about_alt_2"] ?>
                            </p>

                        </div>
                    </li>

                    <li data-reveal="bottom" data-reveal-delay="0.5s">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="./assets/images/icon-1.svg" width="52" height="52" loading="lazy"
                                    alt="web development icon">
                            </div>

                            <h3 class="h4 card-title"><?php echo $aboutcek["about_progress_3"] ?></h3>

                            <p class="card-text">
                                <?php echo $aboutcek["about_alt_3"] ?>
                            </p>

                        </div>
                    </li>

                    <li data-reveal="bottom" data-reveal-delay="0.75s">
                        <div class="about-card">

                            <div class="card-icon">
                                <img src="./assets/images/icon-2.svg" width="52" height="52" loading="lazy"
                                    alt="web seo icon">
                            </div>

                            <h3 class="h4 card-title"><?php echo $aboutcek["about_progress_4"] ?></h3>

                            <p class="card-text">
                                <?php echo $aboutcek["about_alt_4"] ?>
                            </p>

                        </div>
                    </li>

                </ul>

            </div>
        </section>





        <!-- 
        - #PROJECT
      -->

        <section class="section project" aria-labelledby="project-label" id="project">
            <div class="container">

                <div class="title-wrapper" data-reveal="top">

                    <div>
                        <h2 class="h2 section-title" id="project-label">Latest Projects</h2>

                        <p class="section-text">
                            Check out some of my latest projects with creative ideas.
                        </p>
                    </div>

                </div>


                


                <ul class="grid-list">
                    

                    <li>
                        <div class="project-card project-card-1" style="background-color: #c053011f">

                            <div class="card-content" data-reveal="left">

                                <p class="card-tag" style="color: #c05301"><?php echo $projelercek["projeler_ustbaslik_1"] ?></p>

                                <h3 class="h3 card-title"><?php echo $projelercek["projeler_baslik_1"] ?></h3>

                                <p class="card-text">
                                    <?php echo $projelercek["projeler_aciklama_1"] ?>
                                </p>

                                <a href="proje-alt-1.php" class="btn-text" style="color: #c05301">
                                    <span class="span">See Project</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>

                            <figure class="card-banner" data-reveal="right">
                                <img src="<?php echo $projelercek["projeler_img_1"] ?>" width="650" height="370"
                                    loading="lazy" alt="Web Design" class="w-100">
                            </figure>

                        </div>
                    </li>

                    

                    <li>
                        <div class="project-card project-card-2" style="background-color: #91acbd26">

                            <div class="card-content" data-reveal="right">

                                <p class=" card-tag" style="color: #6271ac"><?php echo $projelercek["projeler_ustbaslik_2"] ?></p>

                                <h3 class="h3 card-title"><?php echo $projelercek["projeler_baslik_2"] ?></h3>

                                <p class="card-text">
                                    <?php echo $projelercek["projeler_aciklama_2"] ?>
                                </p>

                                <a href="proje-alt-2.php" class="btn-text" style="color: #6271ac">
                                    <span class="span">See Project</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>

                            <figure class="card-banner" data-reveal="left">
                                <img src="<?php echo $projelercek["projeler_img_2"] ?>" width="600" height="367" loading="lazy"
                                    alt="Web Design" class="w-100">
                            </figure>

                        </div>
                    </li>

                    <li>
                        <div class="project-card project-card-3" style="background-color: #c4cf882e">

                            <div class="card-content" data-reveal="left">

                                <p class=" card-tag" style="color: #777e52"><?php echo $projelercek["projeler_ustbaslik_3"] ?></p>

                                <h3 class="h3 card-title"><?php echo $projelercek["projeler_baslik_3"] ?></h3>

                                <p class="card-text">
                                    <?php echo $projelercek["projeler_aciklama_3"] ?>
                                </p>

                                <a href="proje-alt-3.php" class="btn-text" style="color: #777e52">
                                    <span class="span">See Project</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>

                            <figure class="card-banner" data-reveal="right">
                                <img src="<?php echo $projelercek["projeler_img_3"] ?>" width="600" height="367" loading="lazy"
                                    alt="Web Design" class="w-100">
                            </figure>

                        </div>
                    </li>

                    <li>
                        <div class="project-card project-card-4" style="background-color: #b199b03b">

                            <div class="card-content" data-reveal="left">

                                <p class=" card-tag" style="color: #74637c"><?php echo $projelercek["projeler_ustbaslik_4"] ?></p>

                                <h3 class="h3 card-title"><?php echo $projelercek["projeler_baslik_4"] ?></h3>

                                <p class="card-text">
                                    <?php echo $projelercek["projeler_aciklama_4"] ?>
                                </p>

                                <a href="proje-alt-4.php" class="btn-text" style="color: #74637c">
                                    <span class="span">See Project</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>

                            </div>



                            <figure class="card-banner" data-reveal="right">
                                <img src="<?php echo $projelercek["projeler_img_4"] ?>" width="620" height="370" loading="lazy"
                                    alt="Mobile Design" class="w-100">
                            </figure>

                        </div>
                    </li>

                </ul>

            </div>
        </section>





       

    </article>
</main>

<?php include "footer.php" ?>