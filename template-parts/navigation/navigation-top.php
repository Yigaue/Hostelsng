<nav class="navbar-default">
					  <div class="container-fluid">
					   
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>

					      <!-- Header Image  -->
					    <?php 
					    if ( get_header_image() ) : ?>
    <div id="site-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        </a>
    </div>
<?php endif; ?>
						 
					     <!-- Header Image ends -->

					    </div>
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<?php 
							if(has_nav_menu('primary'))
							{
								wp_nav_menu(array(
									'theme_location' => 'primary',
									'depth' => 4,
									'container' => 'ul',
									'menu_class' => 'nav navbar-nav navbar-right'

									)
								);
								
							}
								
								
							?>
							 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#bookmodel">
       						 <?php echo  esc_html_e('RESERVE NOW','hotelsng') ?>         
   							 </button>
   							
						</div>

					  </div><!-- /.container-fluid -->
					</nav>
				

				