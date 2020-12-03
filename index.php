<?php get_header(); ?>

<section class="page">
    <section>
        <div class="container">
                <?php
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
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