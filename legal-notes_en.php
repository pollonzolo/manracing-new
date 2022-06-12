<?php /*
Template Name: Legal-notes_en
*/ ?>

<?php get_header(); ?>

<body>

    <div class="container">

        <section class="privacy">

            <div class="wrap">

                <div class="sec-title sec-title__privacy">
                    <h1><span class="red">Terms and Conditions</span></h1>
                </div>

                <div class="text-area">

                    <div class="paragraph paragraph__privacy">
                        <p>
                            Text, information and other data published on this website, links to other sites have
                            exclusively informative purpose and do not have official nature. We don't assume any
                            responsability for eventual errors or omissions and damage derived from reading published
                            information, or any form of content present on the website.
                            <br>
                            <br>
                            MAN-MECCANICA ENGINEERING SAS DI A. MANIERO & C.
                            V.A.T. 03458100280
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