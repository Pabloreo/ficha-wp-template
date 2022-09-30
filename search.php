<?php get_header(); ?>
<div class="contenedor">
    <?php
    $s = get_search_query();
    $args = array(
        's' => $s
    );
    // The Query
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) {
        _e("<h2 style='font-weight:bold;color:#000'>Search Results for: " . get_query_var('s') . "</h2>");
        while ($the_query->have_posts()) {
            $the_query->the_post();
    ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php
        }
    } else {
        ?>
        <h2 style='font-weight:bold;color:#000'>Nada encontrado</h2>
        <div class="alert alert-info">
            <p>No hay nada relacionado con tu busqueda.</p>
        </div>
    <?php } ?>
</div>
<?php get_footer(); ?>