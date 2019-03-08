<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {

$parent_style = 'twentynineteen-style'; // This is 'twentynineteen-style' for the Twenty nineteen theme.

wp_enqueue_style ( $parent_style, get_template_directory_uri() .'/style.css' );

wp_enqueue_style(
'twentynineteen-style-exo7',
get_stylesheet_directory_uri() .'/style.css',
array(),
filemtime( get_stylesheet_directory() .'/style.css' )
);
wp_enqueue_script(
    'animation',
    get_stylesheet_directory_uri() . '/js/animation.js',
    array(),
    filemtime( get_stylesheet_directory() . '/js/animation.js' )
);
}




// Ordre des articles
function extraire_cours( $query ) {
   // if ($query->is_category('cours'))
   // {
      $query->set( 'posts_per_page', -1 );
      $query->set( 'orderby', 'title' );
      $query->set( 'order', 'asc' );
   // }
}
add_action( 'pre_get_posts', 'extraire_cours' );









/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>