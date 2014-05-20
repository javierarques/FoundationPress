<section class="map-canvas" style="width: 100%; height: 600px">
    <?php
    /**
     *  Google Maps con marker usando el plugin ACF
     *  http://www.advancedcustomfields.com/resources/field-types/google-map/
     *  
     *  Cada marker es un tipos de patipo 
     */  

    $tiendas_query = new WP_Query( array('post_type' => 'tienda', 'posts_per_page' => -1));
    if ( $tiendas_query->have_posts() ) {
        while ( $tiendas_query->have_posts()) {
            $tiendas_query->the_post();

            $location = get_field('map');

            if( !empty($location) ):
            ?>
                <div class="marker hide" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                    <h5><?php the_title(); ?></h5>
                    <?php the_content(); ?>
                </div>
            <?php endif;
        }
    }

    ?>
</section>