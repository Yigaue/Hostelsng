<!DOCTYPE html>
<html style=" margin-top: 0px !important">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name');?></title>
	<?php wp_head(); ?>
</head>
<?php if(is_front_page()): 
	$hotelsng_classes= array('hotelsng-class', 'this_class');
else:
	$hotelsng_classes= array('x-hotelsng-class');
endif;

	?>
<body <?php body_class($hotelsng_classes);?>>
	<!-- <div class="container"> -->
		
			<!-- <div class="row"> -->
				
				<!-- <div class="col-xs-12"> -->
					 <?php get_template_part( 'template-parts/navigation/navigation', 'top');?>
					
					
				
			
			