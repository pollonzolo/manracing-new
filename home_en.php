<?php /*
Template Name: Home-Page_en
*/ ?>

<?php get_header(); ?>




<!-- LAST CARS ON SALE -->
<?php $img_1 = get_field('car_photo_1')?>
<?php $img_2 = get_field('car_photo_2')?>
<?php $img_3 = get_field('car_photo_3')?>
<?php $url_1 = get_field('car_link_1')?>
<?php $url_2 = get_field('car_link_2')?>
<?php $url_3 = get_field('car_link_3')?>
<?php $name_1 = get_field('car_name_1')?>
<?php $name_2 = get_field('car_name_2')?>
<?php $name_3 = get_field('car_name_3')?>


<div class="container">

    <header>
        <img id="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/hero.JPG" alt="">

        <div class="hero">
            <div class="hero-title">
                <h1>historic</h1>
                <h1>racing cars,</h1>
                <h1>our <span class="red">passion</span></h1>
            </div>
        </div>

    </header>

    <!------INTRO------>

    <section class="intro">
        <div class="wrap">
            <p>
                The never-ending passion that accompanies us, and the experience grown in all the years of active
                presence both in the sporting and technical field, in the historic cars and racing sector, allows us to
                provide to drivers, teams, collectors or simple enthusiasts, a qualified variety of products and
                services.
            </p>
            <h3>antonio maniero</h3>
        </div>
    </section>

    <!------ABOUT ------>

    <section id="about" class="about">
        <!--<img id="about-img" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt=""> -->

        <div class="wrap">

            <div class="sec-title sec-title__about">
                <h1>man <span class="red">racing</span></h1>
            </div>

            <div class="text-area">

                <div class="title title__about">
                    <h3>Man Racing offers a variety of services thought exclusively for the niche of historic racing
                        cars.</h3>
                </div>

                <div class="paragraph paragraph__about">
                    <p>
                        Man Racing started from an idea of Antonio Maniero, who spent his life participating in free
                        time, as an amateur driver in the most diverse car racing. On 2008 he decided to conjugate his
                        passion for motorsport to a new activity, to make available to others his amount of experience
                        matured in over 300 competitions: A range of services thought exclusively for the niche of
                        historic cars, especially race ones, that can answer to the necessities of who wants to start
                        practicing, but also who already practices this fascinating sector of motorsport. Then
                        Man-Racing, motorsport branch of the family company Man-Meccanica Engineering, was born. He is
                        assisted, depending on the case, by his sons Andrea, Massimo and Paolo, by a group of
                        enthusiasts friends and a network made by operators of the field; this generates the overall
                        know-how that can offer high quality answers to the most disparate requests.
                    </p>
                </div>
            </div>
        </div>


        <!--
				<div class="background-text background-text__white">
					<span>MAN RACING</span>
				</div>
-->
    </section>

    <!------ SALE ------>




    <section class="sale">
        <div class="wrap">

            <div class="sec-title sec-title__sale">
                <h1><span class="red">cars</span> on sale</h1>
            </div>

            <div class="latest-cars-container">

                <?php
								// Loop cars
								$custom_query_args = array(
								'post_type' => 'cars',
								'posts_per_page' => 3,
								'orderby' => 'date',
								'order' => 'DESC',
								);
								$custom_query = new WP_Query( $custom_query_args );
							?>

                <?php
								if ( $custom_query->have_posts() ) : while ( $custom_query->have_posts() ) : $custom_query->the_post();
							?>

                <div class="latest-cars car-1">
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

            <button class="btn">
                <a href="<?php echo get_permalink( get_page_by_title( 'cars' ) ) ?>">more cars on sale</a>
            </button>
        </div>


        <!--
							<div class="background-text background-text__black">
							<span>cars on sale</span>
						</div>
-->

    </section>
    <!------ SERVICES ------>

    <!--
<section id="services" class="services">   -->
    <!-- <img id="about-img" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt=""> -->

    <!--	<div class="wrap">

			<div class="sec-title sec-title__services">
				<h1><span class="red">services</span></h1>
			</div>

			<div class="text-area">

			<div class="title title__services">
					<h3>Man Racing offers a variety of services thought exclusively for the niche of historic racing cars.</h3>
			</div>

			<div class="paragraph paragraph__services">
				<p>
				 Man Racing started from an idea of Antonio Maniero, who spent his life participating in free time, as an amateur driver in the most diverse car racing. On 2008 he decided to conjugate his passion for motorsport to a new activity, to make available to others his amount of experience matured in over 300 competitions: A range of services thought exclusively for the niche of historic cars, especially race ones, that can answer to the necessities of who wants to start practicing, but also who already practices this fascinating sector of motorsport. Then Man-Racing, motorsport branch of the family company Man-Meccanica Engineering, was born. He is assisted, depending on the case, by his sons Andrea, Massimo and Paolo, by a group of enthusiasts friends and a network made by operators of the field; this generates the overall know-how that can offer high quality answers to the most disparate requests.
			 </p>
			</div>
		</div>
	</div>


</section>

							-->

    <!------ DO YOU WANT TO SELL? ------>

    <section class="do-you">

        <div class="wrap">
            <div class="sec-title sec-title__do-you">
                <h1>do you want to <span class="red">sell</span></h1>
                <h1>your <span class="red">historic car</span>?</h1>
            </div>
            <!-- <p>Contact us by e-mail or call us. <br>We will be happy to help you!</p> -->

            <button class="btn do-you-btn">
                <a href="#contact">let us know!</a>
            </button>

            <div class="do-you-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/capri.png" alt="">
            </div>
        </div>


    </section>






    <?php
while ( have_posts() ) :
	the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>
    <?php the_content(); ?>


    <?php get_footer(); ?>