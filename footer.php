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
                        <h4>Legale: via Bari 4, 35143, PD
                            <br>
                            Operativo: Piazza Dell'Artigianato 10, 35031, ABANO TERME
                        </h4>
                    </li>

                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <h4>+39 3357487091</h4>
                    </li>

                    <li>
                        <i class="fa-solid fa-paper-plane"></i>
                        <h4><a href="mailto:info@manracing.it" target="_blank">info@manracing.it</a></h4>
                    </li>
                </ul>
            </div>

            <div class="links">
                <ul>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'note legali' ) ) ?>">Termini e
                            condizioni</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Informativa Privacy' ) ) ?>">Informativa
                            Privacy</a></li>
                </ul>
                <p class="copy">©2022 Copyright: Man-meccanica Engineering sas di Antonio Maniero & C.</p>
            </div>

        </div>
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
                        <h4>Legal: via Bari 4, 35143, PADOVA, ITALY
                            <br>
                            Operative: Piazza Dell'Artigianato 10, 35031, ABANO TERME, ITALY
                        </h4>
                    </li>

                    <li>
                        <i class="fa-solid fa-phone"></i>
                        <h4>+39 3357487091</h4>
                    </li>

                    <li>
                        <i class="fa-solid fa-paper-plane"></i>
                        <h4><a href="mailto:info@manracing.it" target="_blank">info@manracing.it</a></h4>
                    </li>
                </ul>
            </div>

            <div class="links">
                <ul>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'legal notes' ) ) ?>">Terms and
                            Conditions</a></li>
                    <li><a href="<?php echo get_permalink( get_page_by_title( 'Privacy' ) ) ?>">Privacy Policy</a></li>
                </ul>
                <p class="copy">©2022 Copyright: Man-meccanica Engineering sas di Antonio Maniero & C.</p>
            </div>

        </div>
    </div>
</footer>

<?php endif; ?>



<?php wp_footer(); ?>
</div>
</body>

</html>