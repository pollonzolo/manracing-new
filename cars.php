<?php /*
Template Name: Cars Page
*/ ?>

<?php get_header(); ?>



<div class="container">

    <header class="head-cars">
        <img id="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/cars-on-sale.jpg" alt="">

        <div class="hero">
            <div class="hero-title">
                <h1>Auto in <span class="red">vendita</span></h1>
            </div>
        </div>

    </header>

    <section class="cars-on-sale">

        <div class="cars-container">

            <?php
				// Loop Projects
				$custom_query_args = array(
				'post_type' => 'cars',
				'posts_per_page' => 20,
				'orderby' => 'date',
				'order' => 'DESC',
				);
				$custom_query = new WP_Query( $custom_query_args );
				?>

            <?php
				if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post();
                ?>

            <div class="car">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                    <div class="car-name">
                        <h4><?php the_title(); ?></h4>
                    </div>
                </a>
            </div>

            <?php
			 endwhile; endif; wp_reset_postdata();
			 ?>
        </div>

    </section>

    <?php get_footer(); ?>