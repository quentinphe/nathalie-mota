<!doctype html>
<html lang="<?php echo get_bloginfo('language'); ?>">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Photographe d'event">
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <!-- Logo -->
            <div class="header-container">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image/nathalie-mota.png" alt="Mon Logo">
                </div>
        
            <!-- menu back-office -->
                <?php
                wp_nav_menu([
                    'theme_location' => 'main-menu',
                ]);
                ?>
            </div>
        
            <div class="banner-home">
                <?php
                // Chemin vers répertoire banniere-photo
                $image_directory = get_template_directory() . '/assets/image/banniere-photo/';

                // Liste les image dans fichier
                $images = glob($image_directory . '*.jpeg');

                // Sélectionne image aléatoirement
                $random_image = $images[array_rand($images)];

                // Affiche l'image en bannière
                echo '<img src="' . $random_image . '" alt="Bannière de présentation">';
                ?>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/image/banniere-photo/nathalie0.jpeg" alt="Mon Logo">
           
    



        