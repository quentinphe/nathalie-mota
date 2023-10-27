<?php
// enregistre le menu dans le back office Wordpress
function register_my_menu() {
    register_nav_menu('main-menu', __('Menu principal', 'text-domain'));
}
add_action('after_setup_theme', 'register_my_menu');


//affiche les styles
function theme_enqueue_styles() {
    wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));

    // Charger le fichier de style personnalisé (index.css)
    wp_enqueue_style( 'index_scss-style', get_stylesheet_directory_uri() . '/assets/sass/index.css',  array(), filemtime(get_stylesheet_directory() . '/assets/sass/index.css'));

    // Charger le fichier script personnalisé (script.js)
    wp_enqueue_script('theme-script', get_stylesheet_directory_uri() . '/assets/js/script.js', array(), filemtime(get_stylesheet_directory() . '/assets/js/script.js'), true);

    //Charger le lien google-font Space Mono 
    wp_enqueue_style ('font-space-mono-style', 'https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap', false);

    wp_enqueue_style ('font-poppins-style', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap', false);
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

/* Option du logo personnalisé
add_theme_support('custom-logo');

function theme_customizer_register($wp_customize) {
    $wp_customize->add_section('theme_logo_section', array(
        'title' => __('Logo', 'text-domain'),
        'priority' => 30,
    ));
    $wp_customize->add_setting('theme_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'theme_logo', array(
        'label' => __('Télécharger le logo', 'text-domain'),
        'section' => 'theme_logo_section',
        'settings' => 'theme_logo',
    )));
}
add_action('customize_register', 'theme_customizer_register');*/

