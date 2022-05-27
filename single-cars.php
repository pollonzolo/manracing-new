

<?php get_header(); ?>

<?php $car_title = get_field('car_title_complete')?>
<?php $img_1 = get_field('img_1')?>
<?php $img_2 = get_field('img_2')?>
<?php $img_3 = get_field('img_3')?>
<?php $img_4 = get_field('img_4')?>
<?php $url = get_field('url')?>

<body>

<div class="container">

<header class="head-single-car">
<?php the_post_thumbnail(); ?>

		<div class="hero">
			<div class="hero-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

	</header>

    <section class="single-car">

    <div class="wrap">
    <div class="single-car__title">
        <h3><?php echo $car_title ?></h3>
      </div>
      
      <div class="single-car__description"><?php the_content(); ?></div>
    </div>

      

    </section>

    <section class="single-car__gallery">
    <img src="<?php echo $img_1 ?>" alt="<?php the_title(); ?>-1">
    <div class="single-car__gallery--nr">
    <span>01</span>
    </div>
    </section>

    <section class="single-car__gallery">
    <img src="<?php echo $img_2 ?>" alt="<?php the_title(); ?>-1">
    <div class="single-car__gallery--nr">
    <span>02</span>
    </div>
    </section>

    <section class="single-car__gallery">
    <img src="<?php echo $img_3 ?>" alt="<?php the_title(); ?>-1">
    <div class="single-car__gallery--nr">
    <span>03</span>
    </div>
    </section>
    
    <section class="single-car__gallery">
    <img src="<?php echo $img_4 ?>" alt="<?php the_title(); ?>-1">
    <div class="single-car__gallery--nr">
    <span>04</span>
    </div>
    </section>


  </section>







<?php get_footer(); ?>

