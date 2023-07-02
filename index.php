<?php wp_head(); ?>
<?php get_header(); ?>

<main id="main-content" class="site-main">
    <?php
    $queried_object = get_queried_object();
    $page_template = get_page_template_slug($queried_object->ID);

    if ($page_template === 'content-servicios.php') {
        // Página de servicios
        get_template_part('template-parts/content', 'servicios');
    } else {
        // Resto de las páginas
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <article <?php post_class(); ?>>
                    <h2><?php the_title(); ?></h2>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>
                <?php
            }
        }
    }
    ?>
</main>

<?php get_footer(); ?>
