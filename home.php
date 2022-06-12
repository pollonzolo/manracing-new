<?php /*
Template Name: Home-Page
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

<body>

    <div class="container">

        <header>
            <img id="hero-img" src="<?php echo get_template_directory_uri(); ?>/img/hero.JPG" alt="">

            <div class="hero hero-it">
                <div class="hero-title">
                    <h1>le autostoriche</h1>
                    <h1>da corsa, la nostra</h1>
                    <h1><span class="red">passione</span></h1>
                </div>
            </div>

        </header>

        <!------INTRO------>

        <section class="intro">
            <div class="wrap">
                <p>
                    La passione che ci accompagna da sempre e l'esperienza maturata in tanti anni di presenza attiva,
                    sia a livello sportivo che tecnico, nel settore delle auto da corsa, ci consente di offrire a
                    piloti, teams, preparatori, collezionisti o semplici appassionati, una gamma qualificata di prodotti
                    e servizi.
                </p>
                <h3>antonio maniero</h3>
            </div>
        </section>

        <!------ABOUT ------>

        <section id="about" class="about">
            <img id="about-img" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt="">

            <div class="wrap">

                <div class="sec-title sec-title__about">
                    <h1>man <span class="red">racing</span></h1>
                </div>

                <div class="text-area">

                    <div class="title title__about">
                        <h3>Man Racing offre una gamma di servizi pensati per le autostoriche, in particolare da corsa
                        </h3>
                    </div>

                    <div class="paragraph paragraph__about">
                        <p>
                            Man Racing nasce da un’idea di Antonio Maniero, una vita trascorsa partecipando nel tempo
                            libero, come pilota dilettante, alle più diverse discipline dell’automobilismo da corsa con
                            le più svariate vetture.
                            Nel 2008 decide di coniugare la sua passione per il motorsport con una nuova attività che
                            metta a disposizione di altri il bagaglio di esperienze maturato in oltre 300 competizioni:
                            una gamma di servizi, pensati esclusivamente per la nicchia delle auto storiche, soprattutto
                            da corsa, che possano rispondere alle necessità di chi vuole iniziare a praticare, ma anche
                            di chi già pratica, questo affascinante settore dello sport automobilistico.
                            Vede quindi la luce Man-Racing, ramo motorsport dell’azienda di famiglia Man-Meccanica
                            Engineering.
                            In questa attività è coadiuvato, a seconda dei casi, dai figli Andrea, Massimo e Paolo, da
                            un gruppo di amici appassionati e da un network di operatori del settore dalle
                            professionalità più diverse; questo genera un know-how complessivo tale da coprire in
                            termini di qualità della risposta le richieste più varie.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!------ SALE ------>

        <section class="sale">
            <div class="wrap">

                <div class="sec-title sec-title__sale">
                    <h1>Le ultime <span class="red">arrivate</span></h1>
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
                    <a href="<?php echo get_permalink( get_page_by_title( 'auto' ) ) ?>">le altre auto</a>
                </button>
            </div>

        </section>
        <!------ SERVICES ------>


        <!--<section id="services" class="services">-->
        <!-- <img id="about-img" src="<?php echo get_template_directory_uri(); ?>/img/about.jpg" alt=""> -->
        <!--
		<div class="wrap">

				<div class="sec-title sec-title__services">
				<h1><span class="red">servizi</span></h1>
			</div>

			<div class="text-area">

				<div class="title title__services">
					<h3>Man Racing offre una gamma di servizi pensati per le autostoriche, in particolare da corsa.</h3>
				</div>

				<div class="paragraph paragraph__services">
					<p>
						Man Racing nasce da un’idea di Antonio Maniero, una vita trascorsa partecipando nel tempo libero, come pilota dilettante, alle più diverse discipline dell’automobilismo da corsa con le più svariate vetture.
						Nel 2008 decide di coniugare la sua passione per il motorsport con una nuova attività che metta a disposizione di altri il bagaglio di esperienze maturato in oltre 300 competizioni: una gamma di servizi, pensati esclusivamente per la nicchia delle auto storiche, soprattutto da corsa, che possano rispondere alle necessità di chi vuole iniziare a praticare, ma anche di chi già pratica, questo affascinante settore dello sport automobilistico.
						Vede quindi la luce Man-Racing, ramo motorsport dell’azienda di famiglia Man-Meccanica Engineering.
						In questa attività è coadiuvato, a seconda dei casi, dai figli Andrea, Massimo e Paolo, da un gruppo di amici appassionati e da un network di operatori del settore dalle professionalità più diverse; questo genera un know-how complessivo tale da coprire in termini di qualità della risposta le richieste più varie.
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
                    <h1>vuoi <span class="red">vendere</span></h1>
                    <h1>la tua <span class="red">autostorica</span>?</h1>
                </div>
                <!-- <p>Contact us by e-mail or call us. <br>We will be happy to help you!</p> -->

                <button class="btn do-you-btn">
                    <a href="#contact">contattaci</a>
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