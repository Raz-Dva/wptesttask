<footer>
    <div class="main_bckg_bottom">
      <img src="<?php echo get_stylesheet_directory_uri()?>/img/background_main_bottom.svg" alt="">
    </div>
    <div class="footer_contact">
      <div class="wrap_contacts">
        <address class="contacts" id="contacts">
          <h3 class="name_company">Studio Graficzne</h3>
          <p>
            ul. Patriotów 222B 04-701 Warszawa
          </p>
          <div class="mid_block_contack">
            <p>
              tel. kom:<a href="tel:+48502448072">+ 48 502 448 072</a>
            </p>
            <p>
              e-mail: <a href="mailto:info@sgr.pl">info@sgr.pl</a></p>
            </p>
          </div>
          <p>
            Biuro – <a href="tel:531">531</a>-STUDIO <a href="tel:531">531-788-346</a> Pomoc techniczna – <a
              href="tel:531">570</a>-STUDIO
          </p>
        </address>
      </div>

      <div class="block_contact_form">
        <p class="title_contact_form">Skontaktuj się z nami</p>
        <div class="contact_form"  id="contactForm">
        <?php echo do_shortcode('[contact-form-7 id="11" title="Контактная форма 1"]'); ?>
        </div>
      </div>

      <div class="modal" id="modal">
        <button class="close_modal" id="btn_close">&times;</button>
        <h4 class="modal_title">potwierdź dane</h4>
        <ul class="modal_list_data">
          <li>Imię i Nazwisko:<span id="list_item_name"></span></li>
          <li>Email:<span id="list_item_email"></span></li>
          <li>Temat:<span id="list_item_theme"></span></li>
          <li>Wiadomość:<span id="list_item_message"></span></li>
        </ul>
        <div class="modal_footer">
          <button class="btn_default moda_data_edit" id="btn_edit">EDYTUJ</button>
          <button class="btn_default modal_data_send"  id="btn_submit">WYŚLIJ</button>
        </div>
      </div>

    </div>
    <div class="footer_map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.3085760028084!2d21.170164915959102!3d52.20143966754052!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471ed3042c533dad%3A0x263a86a5167a523c!2sPatriot%C3%B3w%20222%2C%2004-701%20Warszawa!5e0!3m2!1sru!2spl!4v1639320329532!5m2!1sru!2spl"
        width="100%" height="700" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
      </iframe>
    </div>
  </footer>
  <?php wp_footer() ?>
  </body>

</html>






