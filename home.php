<?php 
    /* Template Name: Homepage */
    get_header(); 
?>

<section class="container">
    <div class="content">
        <?php
            if ( have_posts() ) : 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            else :
                _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif;
        ?>
    </div>
</section>

<?php get_footer(); ?>