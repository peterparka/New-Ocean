<?php

get_header();

if( have_posts() ): while( have_posts() ): the_post(); ?>

    <section class="simple-page-content container">

        <h1><?php the_title(); ?></h1>

        <div>
            <?php the_content(); ?>
        </div>

    </section>

<?php endwhile; endif;
get_footer(); ?>
