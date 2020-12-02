<?php get_header(); ?>

<section class="single">
    <section>
        <div class="container">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            echo '<span class="row text-centered">'.get_the_date().'</span>';
                            if (get_field('feature_image')){
                                echo '<div class="feature-image"><img src="'.get_field('feature_image').'"/></div>';
                            }
                            echo '<div class="content">';
                                the_content();
                            echo '</div>';
                        }
                    }
                ?>
        </div>
    </section>
</section>

<?php get_footer(); ?>