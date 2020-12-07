<?php get_header(); ?>

<section class="page page-galleri">
    <section>
        <div class="container">
                <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                    $args = array(
                        'numberposts'       => -1,
                        'orderby'           => 'date',
                        'order'             => 'DESC',
                        'post_type'         => 'post',
                        'paged'             => $paged,
                        'posts_per_page'    => 5,
                        'category_name'     => 'gallery'
                    );
                    
                    $query = new WP_Query($args);

                    if ($query->have_posts()){
                        echo '<div class="post-feed">';
                            while ($query->have_posts()){
                                $query->the_post();
                                echo '<a href="'. get_the_permalink() .'" class="post" style="background-image: url('. get_field('gallery_thumbnail') .');">';
                                    echo '<span class="row date text-centered">'.get_the_title().'</span>';
                                echo '</a>';
                            }
                            echo '<div class="pagination-controls">';
                                previous_posts_link('Tilbake');
                                next_posts_link(__('Neste'), $query->max_num_pages );
                            echo '</div>';

                            wp_reset_postdata();
                        echo '</div>';
                    }

                ?>
        </div>
    </section>
</section>

<?php get_footer(); ?>