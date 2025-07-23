<?php get_header(); ?>

<h1><?php the_title(); ?></h1>
<div>
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    else :
      echo '<p>No content found</p>';
    endif;
  ?>
</div>

<?php get_footer(); ?>
