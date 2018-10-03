<?php
/**
 * Template Name: Modèle Page Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php// get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-accueil'); ?>
<?php endwhile; ?>
