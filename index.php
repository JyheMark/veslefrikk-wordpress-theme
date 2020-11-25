<?php get_header(); ?>

<?php
    echo 'index php';
    if (have_posts()) {
        while (have_posts()){
            the_post();
            the_content();
        }
    }
    else {
        ?>
            <span>Nothing to show!</span>
        <?php
    }
?>

<?php get_footer(); ?>