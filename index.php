<?php wp_head(); ?>
<?php get_header(); ?>

<main id="main-content" class="site-main">
    <?php
    echo is_page();
    if (is_front_page()) {
        // Página de inicio
        get_template_part('template-parts/content', 'home');
    } elseif (is_page('contacto')) {
        // Página de contacto
        get_template_part('template-parts/content', 'contacto');
    } elseif (is_page('servicios')) {
        // Página de servicios
        get_template_part('template-parts/content', 'servicios');
    } elseif (is_page('nosotros')) {
        // Página de nosotros
        get_template_part('template-parts/content', 'nosotros');
    } elseif (is_404()) {
        // Página de error 404
        get_template_part('template-parts/content', '404');
    } else {
        // Cualquier otra página
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
