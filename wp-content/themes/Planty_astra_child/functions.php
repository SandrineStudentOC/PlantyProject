<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));

}

// Action qui permet de supprimer les balises <p> dans le plugin contact form

add_filter('wpcf7_autop_or_not', '__return_false');


// Action qui permet d'ajouter un lien admin sur le menu principal et hors-champs quand l'internaute est connecté à WP

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in() && ('primary' == $args->theme_location || 'mobile_menu' == $args->theme_location) ) {
        $items .= '<li><a href="' . admin_url() . '" class="menu-link">Admin</a></li>';
    }

    return $items;
}

