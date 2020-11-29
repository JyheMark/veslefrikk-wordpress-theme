<?php get_header(); ?>

<section class="page page-<?php echo the_title(); ?>">
    <section>
        <div class="container">
            <div class="content">
                <?php
                    echo 'index.php';
                    if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_content();
                        }
                    }
                    else {
                        echo('No posts available.');
                    }
                ?>
            </div>
        </div>
    </section>
</section>

<?php get_footer(); ?>