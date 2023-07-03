<?php
/*
 * Template Name: Servicios
 * Template Post Type: page
 */

get_header(); // Incluir el encabezado de la página
?>

<main id="main-content" class="site-main">
    <?php
    // Contenido específico de la página de servicios
    while (have_posts()) {
        the_post();
        the_content();
    }
    ?>
</main>

<?php get_footer(); // Incluir el pie de página ?>
