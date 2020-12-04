<?php get_header(); ?>

<section class="single">
    <section>
        <div class="container">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            echo '<div>';
                                echo '<h2>'. get_the_title() .'</h2>';
                                echo '<span class="row text-centered date">'.get_the_date().'</span>';
                                echo '<div class="content">';
                                    the_content();
                                echo '</div>';
                            echo '</div>';
                            if (get_field('feature_image')){
                                echo '<div class="feature-image"><img src="'.get_field('feature_image').'"/></div>';
                            }
                        }
                    }
                ?>
        </div>
    </section>
</section>

<?php get_footer(); ?>