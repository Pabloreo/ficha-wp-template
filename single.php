<?php get_header(); ?>

<div class="contenedor" id="singular">

    <?php while( have_posts()): the_post( ); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>