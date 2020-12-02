<?php get_header(); ?>

<section class="page page-nyheter">
    <section>
        <div class="container">
                <?php
                    $args = array(
                        'numberposts'       => -1,
                        'orderby'           => 'date',
                        'order'             => 'DESC',
                        'post_type'         => 'post',
                        'paged'             => 1,
                        'posts_per_page'    => 5
                    );
                    
                    $query = new WP_Query($args);

                    if ($query->have_posts()){
                        echo '<div class="post-feed">';
                            while ($query->have_posts()){
                                echo '<div class="post">';
                                    $query->the_post();
                                    echo '<div>';
                                        echo '<span class="row">'.get_the_date().'</span>';
                                        echo '<a href="'.get_the_permalink().'" class="row">'.get_the_title().'</a>'; 
                                        echo '<p>'. get_the_excerpt() .'</p>';
                                        echo '<a href="'.get_the_permalink().'" class="row read-more">Les videre</a>'; 
                                    echo '</div>';   
                                    if ($imgSrc = get_metadata( 'post', get_the_ID(), 'feature_image', true)){
                                        echo '<a class="feature-image" href="'.get_the_permalink().'" 
                                            style="background-image: url('.
                                                wp_get_attachment_image_url( $imgSrc, 'full').
                                            ');"></a>';
                                        
                                    }                   
                                echo '</div>';
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