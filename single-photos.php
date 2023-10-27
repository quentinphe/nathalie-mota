<?php get_header(); ?>

<section class="container-single">
    <article class="wrapper-single">
        <div class="details-box-image">
            <?php 
            if (have_posts()) : 
                while (have_posts()) : the_post();
            ?>
                <h1><?php the_title(); ?></h1>
                <?php 
                $reference_values = get_field('reference');
                if ($reference_values) {
                    $reference = $reference_values;
                    echo '<p class="reference-post">Référence : ' . $reference .'</p>';
                }

                $categories = wp_get_post_terms(get_the_ID(),'catego');
                if (!empty($categories)) {
                    echo '<p>Catégorie : ';
                    $category_names = [];
                    foreach ($categories as $category) {
                        $category_names[] = $category->name;
                    }
                    echo implode(',', $category_names);
                    echo '</p>';
                }

                $formats = wp_get_post_terms(get_the_ID(),'format');
                if (!empty($formats)) {
                    echo '<p>Format : ';
                    $format_names = [];
                    foreach ($formats as $format) {
                        $format_names[] = $format->name;
                    }
                    echo implode(',', $format_names);
                    echo '</p>';
                }
                ?>
                <p>Année : <?php echo get_the_date('Y'); ?></p>
            
                <div class="separate"></div>
        </div>
        <div class="post-photo">
            <?php the_post_thumbnail(); ?>
        </div>
    </article>
</section> 
<section class="second-container">
    <article class="wrapper-photo-contact">
        <div class="contact-container">
            <p>Cette photo vous intéresse</p>
            <button class="btn-single-contact">Contact</button>
        </div>
    </article>
    <div class="container-arrow">

    </div>
</section>

<?php get_footer(); ?> 