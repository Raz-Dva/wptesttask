<?php get_header() ?>
<?php
// TO SHOW THE PAGE CONTENTS
while (have_posts()) : the_post(); ?>
  
  <div class="entry-content-page">
    <?php the_content(); ?>
    <!-- Page Content -->
  </div>
<?php
endwhile; 
wp_reset_query(); 
?>

<?php get_footer() ?>