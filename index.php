<?php 
get_header();

 global $header_image, $header_style;
 	 $header_image = get_header_image();
 	 ?>
<!-- carousel starts here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

 	 
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="<?php bloginfo('template_directory')?>/images/front_page.png" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3 style="font-family: pattaya, font-size: 48px">Let’s make your stay memorable</h3>
          <!-- <p>LA is always so much fun!</p> -->
        </div>
      </div>

      <div class="item">
        <img src="<?php bloginfo('template_directory')?>/images/blogto-banner-1920-850.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
           <h3 style="font-family: pattaya, font-size: 48px">Let’s make your stay memorable</h3>
          <!-- <p>Thank you, Chicago!</p> -->
        </div>
      </div>
    
      <div class="item">
        <img src="<?php bloginfo('template_directory')?>/images/blogto-banner-1920-850.jpg" alt="New York" style="width:100%";>
        <div class="carousel-caption">
            <h3 style="font-family: pattaya, font-size: 48px">Let’s make your stay memorable</h3>
         <!--  <p>We love the Big Apple!</p> -->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
<!-- Carousel ends here -->

<!-- Hotel galley bgins -->
<!-- Gallery  line 1 -->
<div class="gallery-group">
<div class="gallery1">
	<h3> OUR ROOMS</h3>

	<div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/rooms/room.png" alt="Forest">
        </a>
        <p> Master Bed <span> $550 per night</span></p> 
        </div>

        <div class="image-with-text" style="float: left">
       <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/rooms/room1.png" alt="Forest">
  </a>
  <p> Double Bed <span> $550 per night</span></p>
</div>

 <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/rooms/room2.png" alt="Forest">
     </a>
     <p> Presidential Suite<span> $550 per night</span></p>
 </div>
  </div>
<div class="gallery2">
	<h3> OUR FACILITIES/SERVICES</h3>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/facilities/facility.png" alt="Forest">
  </a>
  <p class="img-with-text"> Wellness and Spa</p>
  </div>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/facilities/facility1.png" alt="Forest">
  </a>
  <p class="img-with-text">The Gym </p>
  </div>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/facilities/facility2.png" alt="Forest">
  </a>
  <p class="img-with-text"> Swimming Pool</p>
  </div>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/facilities/facility3.png" alt="Forest">
  </a>
  <p class="img-with-text">Golf Course</p>
  </div>
 </div>

<div class="gallery3">
	<h3> OUR SPECIAL OFFERS</h3>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/offers/offer.png" alt="Forest">
  </a>
  <p class="img-with-text"> Booking Discount</p>
  </div>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/offers/offer1.png" alt="Forest">
   </a>
     <p class="img-with-text">Early Bird Offer</p>
     </div>

  <div class="image-with-text" style="float: left">
  <a target="_blank" href="img_5terre.jpg">
    <img src="<?php bloginfo('template_directory')?>/images/offers/offer2.png" alt="Forest">
  </a>
  <p class="img-with-text">About to Wed</p>
  </div>
</div>
</div>



<!-- Hotel gallery ends -->

<br/><br/>

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
 

