<?php 
get_header();

// get_template_part( 'template-parts/content', 'carousel'); *****(Resurrect if valid)*****
// get_template_part( 'template-parts/content', 'gallery' );*****(Resurrect if valid)*****
?>


<div><?php
if ( have_posts()):
 while (have_posts() ): the_post();
   get_template_part( 'template-parts/content', 'carousel');
get_template_part( 'template-parts/content', 'gallery' );
     // get_template_part('template-parts/content', get_post_format());
  endwhile;
    else :
      get_template_part( 'template-parts/content', 'none' );
    endif;

?>
 <div style="padding:15px" class="entry">
<h1> <?php the_title();?></h1>

<?php the_content();?>
 </div>


<?php
if (is_front_page()):
  get_footer('home');
else:

  get_footer();
endif;
 