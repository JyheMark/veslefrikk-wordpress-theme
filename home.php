<?php 
    /* Template Name: Homepage */
    get_header(); 
?>

<section class="container page-home">
    <div class="container">
        <img src="<?php echo wp_get_attachment_image_url( 53, 'full'); ?>"/>
        <div class="content">
            <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                }
                else {
                    e_('No posts available.');
                }
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>