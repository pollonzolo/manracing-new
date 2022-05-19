<?php /*
Template Name: Cars Page
*/ ?>

<?php $p_title = get_field('project_title')?>

<?php get_header(); ?>

<div class="container-3">

    <header class="head-cars">
		<img id="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/hero.jpg" alt="">

		<div class="hero">
			<div class="hero-title">
				<h1>cars on <span class="red">sale</span></h1>
			</div>
		</div>

	</header>

    <section class="cars-on-sale">
        <div class="wrap">

            <!-- <div class="sec-title sec-title__sale">
                <h1><span class="red">cars</span> on sale</h1>
            </div> -->

		    <div class="cars-container">
								


				<?php
				// Loop Projects
				$custom_query_args = array(
				'post_type' => 'projects',
				'posts_per_page' => 20,
				'orderby' => 'menu_order',
				'order' => 'ASC',
				);
				$custom_query = new WP_Query( $custom_query_args );
				?>

				<?php
				if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post();
                ?>

                                <div class="car">
									<a href="<?php the_permalink(); ?>">
										<img <?php the_post_thumbnail(); ?> alt="<?php echo $name_1 ?>">
										<div class="car-name">
											<h4><?php the_title(); ?></h4>
										</div>
									</a>
								</div>

				<?php
			 endwhile; endif; wp_reset_postdata();
			 ?>
             </div>
	    </div>

    </section>







<?php get_footer(); ?>
