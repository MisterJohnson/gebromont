<?php
/**
 * Template Name: Modèle Page À-propos
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php// get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-about'); ?>
<?php endwhile; ?>