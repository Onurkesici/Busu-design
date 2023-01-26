 <!-- 
        - #CONTACT
      -->

      <section class="section contact" aria-label="contact" id="contact">
            <div class="container">

                <div class="contact-card">

                    <div class="contact-content" data-reveal="left">

                        <div class="card-icon">
                            <img src="./assets/images/icon-5.png" width="44" height="44" loading="lazy"
                                alt="envelop icon">
                        </div>

                        <h2 class="h2 section-title"><?php echo $ayarcek["ayar_mail_alt"] ?></h2>

                        <p class="section-text">
                            <?php echo $ayarcek["ayar_mail_alt_aciklama"] ?>
                        </p>

                    </div>

                    <form class="contact-form" data-reveal="right" onsubmit="sendEmail(); reset(); return false;">

                        <div class="input-wrapper">
                            <input id="name" type="text" name="name" placeholder="Name" required class="input-field">

                            <input id="email" type="email" name="email_address" placeholder="Email" required
                                class="input-field">
                        </div>

                        <textarea id="message" name="message" placeholder="Message" required
                            class="input-field"></textarea>

                        <button type="submit" class="btn btn-secondary">Send message</button>

                    </form>

                </div>

            </div>
        </section>


<footer class="footer">
    <div class="container">

      <p class="copyright">
        © &nbsp; <span id="currentYear"></span>&nbsp; <strong> <a href="https://www.instagram.com/webon.dev/" target="_blank"> Webon </a></strong>. All rights reserved. 
      </p>

      <ul class="social-list">

        <li>
          <a href="<?php echo $ayarcek["ayar_linkedin"] ?>" target="_blank" class="social-link">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
        </li>

        <li>
          <a href="<?php echo $ayarcek["ayar_github"] ?>" target="_blank" class="social-link">
            <ion-icon name="logo-github"></ion-icon>
          </a>
        </li>

        <li>
          <a href="<?php echo $ayarcek["ayar_instagram"] ?>" target="_blank" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li>

      </ul>

    </div>
  </footer>





  <!-- 
    - #scroll up
  -->
  <a href="#" class="scrollup" id="scroll-up">
    <img src="./assets/images/arrow-up-outline.svg" alt="">
    <ion-icon name="arrow-up-outline scroll-up_icon"></ion-icon>
  </a>


  <script>
    const yearSpan = document.querySelector("#currentYear");
    const currentYear = new Date();
    yearSpan.innerHTML = currentYear.getFullYear();
  </script>




  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
</body>

</html>