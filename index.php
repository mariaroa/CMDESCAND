<?php wp_head(); ?>
<?php get_header(); ?>

<main id="main-content" class="site-main">
    <?php
    if (is_front_page()) {
        // Página de inicio
        get_template_part('template-parts/content', 'home');
    } elseif (is_page('contacto')) {
        // Página de contacto
        get_template_part('template-parts/content', 'contacto');
    } elseif (is_page('/servicios')) {
        // Página de servicios
        get_template_part('template-parts/content', 'servicios');
    } elseif (is_page('nosotros')) {
        // Página de nosotros
        get_template_part('template-parts/content', 'nosotros');

    } else {
        get_template_part('template-parts/content', '404');
      }
    ?>
</main>

<?php get_footer(); ?>
