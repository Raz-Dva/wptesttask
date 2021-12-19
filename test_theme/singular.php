<?php get_header() ?>

<main>
  <?php

  while (have_posts()) : the_post(); ?>
    <div class="page_gallery">
      <h2><?php the_title() /* заголовок */ ?></h2>
      <?php the_content(); ?>

    </div>
  <?php
  endwhile;
  wp_reset_query();
  ?>
</main>

<?php get_footer() ?>