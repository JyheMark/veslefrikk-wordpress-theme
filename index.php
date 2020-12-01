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
        </div>
    </section>
</section>

<?php get_footer(); ?>