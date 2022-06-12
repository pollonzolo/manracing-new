<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content=" Compravendita autostoriche da corsa, restauro e preparazione vetture per le corse, ricambi, rimessaggio, ottenimento HTP FIA">
    <meta name="keywords"
        content="MAN RACING, MAN-RACING, NOLEGGIO auto storiche, FORD, ESCORT, RS, RALLY, STORICO, STORICI, REVIVAL, CRONOSCALATA, SALITA, SALITE, AUTO STORICHE, ALLESTIMENTO, RICAMBI, PREPARAZIONE, POSTERIORE, TRAVERSI, ELBORAZIONE, MOTORE, AUTO IN VENDITA, MOTORSPORT,rally">
    <link rel="icon" type="image/png" sizes="32x32"
        href="<?php echo get_template_directory_uri(); ?>/img/Favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96"
        href="<?php echo get_template_directory_uri(); ?>/img/Favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16"
        href="<?php echo get_template_directory_uri(); ?>/img/Favicon/favicon-16x16.png">
    <?php wp_head(); ?>
</head>

<body>
    <nav class="nav .navigation">
        <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); } ?>
        <div class="hamburger nav-closed">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <div class="nav-links">

            <div class="cross nav-open">
                <div class="line line-1"></div>
                <div class="line line-2"></div>
            </div>

            <?php if (is_page(array("home", "home-2"))):?>

            <?php wp_nav_menu(
  array(
    'theme_location'  => 'primary',
    'menu_class'      => 'nav__menu',
  )
  ); ?>

            <?php else : ?>

            <?php wp_nav_menu(
  array(
    'theme_location'  => 'primary-2',
    'menu_class'      => 'nav__menu',
  )
  ); ?>

            <?php endif; ?>


        </div>

    </nav>