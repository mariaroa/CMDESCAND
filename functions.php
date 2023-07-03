<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

// Crear la página "Servicios"
$page_args = array(
    'post_title'    => 'Servicios',
    'post_content'  => 'Aquí puedes agregar el contenido de la página de servicios.',
    'post_status'   => 'publish',
    'post_type'     => 'page'
);

// Insertar la página en la base de datos
$page_id = wp_insert_post($page_args);

// Verificar si la página se creó correctamente
if (!is_wp_error($page_id)) {
    echo 'La página de Servicios se creó con éxito. ID de la página: ' . $page_id;
} else {
    echo 'Hubo un error al crear la página de Servicios.';
}