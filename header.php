<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="地熱発電の再開が計画される八丈島にて、 EVキャンピングカーと充電設備を備えたキャンプ場で、 ECO且つ快適な新たなキャンプスタイルを展開します。 CAFE BARと連携した最高のFOOD MENUも準備中です。">
    <meta name="author" content="">
    <meta name="keywords" content="yellow8, camp, ev, electric, camper, campervan, van, island, EVキャンピングカー, 八丈島,　キャンプ場、電動自動車、電動">

    <?php wp_head(); ?>
  </head>


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


  
