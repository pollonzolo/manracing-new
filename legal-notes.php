<?php /*
Template Name: Legal-notes
*/ ?>

<?php get_header(); ?>

<body>

    <div class="container">

        <section class="privacy">

            <div class="wrap">

                <div class="sec-title sec-title__privacy">
                    <h1><span class="red">note legali</span></h1>
                </div>

                <div class="text-area">

                    <div class="paragraph paragraph__privacy">
                        <p>
                            I testi, le informazioni e gli altri dati pubblicati in questo sito nonchè i link ad altri
                            siti presenti sul web hanno esclusivamente scopo informativo e non assumono alcun carattere
                            di ufficialità. Non assume alcuna responsabilità per eventuali errori od omissioni di
                            qualsiasi tipo e per qualunque tipo di danno diretto, indiretto o accidentale derivante
                            dalla lettura o dall'impiego delle informazioni pubblicate, o di qualsiasi forma di
                            contenuto presente nel sito o per l'accesso o l'uso del materiale contenuto in altri siti.
                            <br>
                            <br>
                            MAN-MECCANICA ENGINEERING SAS DI A. MANIERO & C.
                            P.I. 03458100280
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