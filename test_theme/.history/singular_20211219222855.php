<?php get_header() ?>

<main>

  <div class="page_gallery">
    <h1 class="page_gallery_title">Strony WWW</h1>
    <div class="page_gallery_text">
      <p>Ogólnie znana teza głosi, iż użytkownika może rozpraszać zrozumiała zawartość strony, kiedy ten chce zobaczyć
        sam jej wygląd. Jedną z mocnych stron używania Lorem Ipsum jest to, że ma wiele różnych „kombinacji” zdań,
        słów i akapitów, w przeciwieństwie do zwykłego: „tekst, tekst, tekst”, sprawiającego, że wygląda to „zbyt
        czytelnie” po polsku. Wielu webmasterów i designerów używa Lorem Ipsum jako domyślnego modelu tekstu i
        wpisanie w internetowej wyszukiwarce 'lorem ipsum' spowoduje znalezienie bardzo wielu stron, które wciąż są w
        budowie. Wiele wersji tekstu ewoluowało i zmieniało się przez lata, czasem przez przypadek, czasem specjalnie
        (humorystyczne wstawki itd).</p>
    </div>

    <div class="wrap_gallery">
      //////// gallery /////
    </div>
  </div>


  <?php

  while (have_posts()) : the_post(); ?>
    <div class="page_gallery">

      <?php the_content(); ?>

    </div>
  <?php
  endwhile;
  wp_reset_query();
  ?>
</main>

<?php get_footer() ?>