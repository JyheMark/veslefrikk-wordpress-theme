<?php get_header(); ?>

<section class="page">
    <section>
        <div class="container">
                <?php
                    if (have_posts()) {
                        echo '<div class="content">';
                            while (have_posts()) {
                                the_post();
                                the_content();
                            }
                        echo '</div>';
                    }
                    else {
                        echo('No posts available.');
                    }
                ?>
                <?php 
                    if (is_page('takk')){
                        echo '<div class="row" style="text-align: center;padding:15px 0;">';
                            echo '<a class="btn btn-primary" href="'.home_url().'">Tilbake til forsiden</a>';
                        echo '</div>';
                    }
                ?>
        </div>
    </section>
</section>

<?php get_footer(); ?>