<?php /*
Template Name: Privacy-Page
*/ ?>

<?php get_header(); ?>

<body>

    <div class="container">


        <!------INTRO------>

        <!------ABOUT ------>

        <section class="privacy">

            <div class="wrap">

                <div class="sec-title sec-title__privacy">
                    <h1><span class="red">INFORMATIVA PRIVACY</span></h1>
                </div>

                <div class="text-area">

                    <div class="paragraph paragraph__privacy">
                        <p>
                            INFORMATIVA PRIVACY AI SENSI DELL'ART. 13 DEL D.LGS 196/2003 (CODICE PRIVACY)
                            <br>
                            Questo sito non utilizza cookie.
                        </p>
                    </div>
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