<?php 
get_header();

 global $header_image, $header_style;
 	 $header_image = get_header_image();
 	 ?>

<?php
if( have_posts()):
while(have_posts()): the_post();
	   // get_template_part('template-parts/content', get_post_format());

?>
 <div style="padding:15px" class="entry">
<h1> <?php the_title();?></h1>

<?php the_content();?>
 </div>

<?php
endwhile; 


endif;
?>

<?php
if (is_front_page()):
	get_footer('home');
else:

	get_footer();
endif;
 

