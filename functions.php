<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('my-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function custom_rewrite_rule() {
    add_rewrite_rule('^mis-paginas/([^/]*)/?', 'index.php?page_id=$matches[1]', 'top');
}
add_action('init', 'custom_rewrite_rule', 10, 0);

function change_page_links($permalink, $post) {
    if ($post->post_type == 'page') {
        $permalink = home_url('/mis-paginas/' . $post->post_name . '/');
    }
    return $permalink;
}
add_filter('page_link', 'change_page_links', 10, 2);