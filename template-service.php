<?php/*Template Name: Service Page */?>
<?php get_header(); ?>

<section class="page page-service">
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
                <?php
                    if (get_field('service_image')){
                        echo '<div class="service-image" style="background-image: url('. get_field('service_image') .')">';
                        echo '</div>';
                    }
                ?>
        </div>
    </section>
    <section>
            <div class="container">
                <a href="<?php echo get_the_permalink(54) ?>" class="btn btn-primary">Meld deg opp</a>
            </div>
    </section>
</section>

<?php get_footer(); ?>