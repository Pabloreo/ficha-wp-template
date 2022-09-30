<?php
/*
Template Name: Search Page
*/
?>
<?php
get_header(); ?>

<div class="contenedor">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php get_search_form(); ?>
            <?php

            global $query_string;

            wp_parse_str($query_string, $search_query);
            $search = new WP_Query($search_query);

            ?>
            <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
