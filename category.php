<?php
/**
 * A Simple Category Template
 */
get_header(); ?>

<section id="primary" class="contenedor">
    <div id="content" role="main">
        <?php
        if (have_posts()) : ?>
            <header class="archive-header">
                <h1 class="archive-title"> <?php single_cat_title('', true); ?></h1>
            </header>
            <?php
            // The Loop
            while (have_posts()) : the_post(); ?>
                <h4>
                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                </h4>
                <hr>

            <?php endwhile;

        else : ?>
            <p>Aún no tenemos productos en esta marca.</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>