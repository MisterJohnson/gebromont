<?php
/**
 * Template Name: Modèle Page Employé-Ingénieur
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php// get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page-ingenieur'); ?>
<?php endwhile; ?>
