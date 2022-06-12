<?php /*
Template Name: Privacy-Page_en
*/ ?>

<?php get_header(); ?>

<body>

    <div class="container">


        <!------INTRO------>

        <!------ABOUT ------>

        <section class="privacy">

            <div class="wrap">

                <div class="sec-title sec-title__privacy">
                    <h1><span class="red">PRIVACY POLICY</span></h1>
                </div>

                <div class="text-area">

                    <div class="paragraph paragraph__privacy">
                        <p>
                            This website doesn't use cookies.
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