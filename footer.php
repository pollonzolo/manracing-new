
<!------FOOTER------>
<?php $currentLanguage = get_bloginfo('language');?>
    <?php if ('it-IT' == $currentLanguage  ):?>

  <footer id="contact" class="contact">
      <?php //wp_nav_menu(array('theme_location'=>'secondary'))?>
      <div class="wrap">

        <div class="sec-title">
          <h1><span class="red">contatti</span></h1>
        </div>

				<div class="text-area">
          <div class="contact-list">
					<ul>
            <li>
            <i class="fa-solid fa-map-location-dot"></i>
              <h4>indirizzo</h4>
            </li>

            <li>
            <i class="fa-solid fa-phone"></i>
              <h4>telefono</h4>
            </li>

            <li>
            <i class="fa-solid fa-paper-plane"></i>
              <h4>mail</h4>
            </li>
          </ul>
					</div>

          <div class="links">
            <ul>
              <li><a href="#">Termini e condizioni</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copy">© Copyright 2022 by Paolo Maniero</p>
      		</div>

				</div>

			<!--	<div class="background-text background-text__white">
					<span>contact</span>
				</div>
-->

        

        </div>




    </footer>

<?php else : ?>

  <footer id="contact" class="contact">
      <?php //wp_nav_menu(array('theme_location'=>'secondary'))?>
      <div class="wrap">

        <div class="sec-title">
          <h1><span class="red">contact</span></h1>
        </div>

				<div class="text-area">
          <div class="contact-list">
					<ul>
            <li>
            <i class="fa-solid fa-map-location-dot"></i>
              <h4>address</h4>
            </li>

            <li>
            <i class="fa-solid fa-phone"></i>
              <h4>phone</h4>
            </li>

            <li>
            <i class="fa-solid fa-paper-plane"></i>
              <h4>mail</h4>
            </li>
          </ul>
					</div>

          <div class="links">
            <ul>
              <li><a href="#">Terms and Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copy">© Copyright 2022 by Paolo Maniero</p>
      		</div>

				</div>

			<!--	<div class="background-text background-text__white">
					<span>contact</span>
				</div>
-->

        

        </div>




    </footer>

<?php endif; ?>


    
    <?php wp_footer(); ?>
  </div>
  </body>
</html>
