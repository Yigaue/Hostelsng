<h2>Home <img src="<?php echo get_theme_file_uri('/assets/images/vectors/header_arrow.png')?>"> <?php  esc_html_e('Make Reservations','hotelsng') ?>
      </h2>

  </div>
  <div class="page-header-img">
    <img src="<?php echo get_theme_file_uri('/assets/images/reservations/header.png')?>">
    
   
    <p class= "page-header-desc">Book one of our rooms now by appropriately filling the reservation form below:</p>

  </div>
<!-- Reservation form begins here -->

<form class="reserve" action="whatever.php">

    <p class="form-gp">Name</p><br/>
    <input type="text" name="name" id="name" class="reserve-input">


    <p class="form-gp">Phone Number</p><br/>
    <input type="tel" name="phone" id="num" class="reserve-input">

     <p class="form-gp">Email Address</p><br/>
    <input type="email" name="email" id="mail" class="reserve-input">

    <p class="form-gp">Check-in</p><br/>
    <input type="text" name="checkin" class="chekin reserve-input" id="in">

    <p class="form-gp">Check-out</p><br/>
    <input type="text" name="checkout" class="chekout reserve-input" id="out">

    <p class="form-gp">Guests</p><br/>
    <input type="text" name="guest" class="guest reserve-input" id="guest">
    <input type="button" name="submit" value="Submit" class="reserve-bt">

</form>


<!-- Reservation form ends here -->
<br/>
<br/>

