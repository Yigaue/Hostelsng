   
        <footer class="ct-footer">
            <?php 
          if (is_front_page() || is_home()):
    	get_template_part( 'template-parts/content', 'subscription' );
   endif; 

  get_template_part( 'template-parts/navigation/navigation', 'footer' );
   ?>
   
</footer> 

