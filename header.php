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
					
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					     <a href=""> <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" /></a>
						 
					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'container' => false,
									'menu_class' => 'nav navbar-nav navbar-right'
									)
								);
							?>
						</div>
					  </div><!-- /.container-fluid -->
					</nav>
				
				<!-- </div> -->

			<!-- </div> -->
				
			
			