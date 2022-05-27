

<?php $img_1 = get_field('img_1')?>
<?php $img_2 = get_field('img_2')?>
<?php $img_3 = get_field('img_3')?>
<?php $img_4 = get_field('img_4')?>
<?php $url = get_field('url')?>

<?php get_header(); ?>

<body>

<div class="container-3">

  <header class="head-cars">
	<?php the_post_thumbnail(); ?>

		<div class="hero">
			<div class="hero-title">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>

	</header>

    <section class="single-car">

      <div class="single-car__title">
        <h3><?php the_title(); ?></h3>
      </div>
      
      <div class="single-car__description"><?php the_content(); ?></div>

      <div class="single-car__gallery">

        <div class="single-car__gallery--img">
          <img src="<?php echo $img_1 ?>" alt="<?php the_title(); ?>-1">
        </div>

        <div class="single-car__gallery--img">
          <img src="<?php echo $img_2 ?>" alt="<?php the_title(); ?>-2">
        </div>

        <div class="single-car__gallery--img">
          <img src="<?php echo $img_3 ?>" alt="<?php the_title(); ?>-3">
        </div>

        <div class="single-car__gallery--img">
          <img src="<?php echo $img_4 ?>" alt="<?php the_title(); ?>-4">
        </div>

      </div>

      <div class="read-more">
      <a href="<?php echo $url ?>">Read More</a>
      </div>


  </section>







<?php get_footer(); ?>

