<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Hotels.ng
 * @since 1.0
 * @version 1.0
 */

get_header();

get_template_part( 'template-parts/navigation/content', 'page_header' );
 ?>
  
      <?php
      while ( have_posts() ) : the_post();

endwhile; // End of the loop.
      ?>


   <?php   get_template_part( 'template-parts/page/content', 'facilities' );?>


<div class= "footer-pages">
<?php get_footer();?>
</div>