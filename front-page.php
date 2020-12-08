<?php 
    get_header(); 
?>

<section class="page page-home">
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
                    if (get_field('feature_image')){
                        echo '<div class="image-container" style="background-image: url('. get_field('feature_image') .'"></div>';
                    }
                ?>
        </div>
    </section>
    <section>
        <div class="container">
            <h2 class="row text-centered">Har du en skuespiller i deg?</h3>
            <div class="service-list">
                <span class="row text-centered">Vi har tilbud til barn og ungdom i alle aldre</span>
                <?php
                    $ageGroupArray = array(
                        array(
                            'label'     => 'Veslefrikk Mini: 2-3 år',
                            'postId'    => 140,
                            'url'       => './grupper/veslefrikk-mini-2-3-ar/'
                        ),array(
                            'label'     => 'Veslefrikk Mini: 3-5 år',
                            'postId'    => 142,
                            'url'       => './grupper/veslefrikk-mini-3-5-ar/'
                        ),array(
                            'label'     => 'Barneteater: 6-8 år',
                            'postId'    => 144,
                            'url'       => './grupper/barneteater-6-8-ar/'
                        ),array(
                            'label'     => 'Barneteater: 9-11 år',
                            'postId'    => 146,
                            'url'       => './grupper/barneteater-9-11-ar/'
                        ),array(
                            'label'     => 'Ungdomsteater: 11-13 år',
                            'postId'    => 148,
                            'url'       => './grupper/ungdomsteater-11-13-ar/'
                        ),array(
                            'label'     => 'Ungdomsteater: 13-18 år',
                            'postId'    => 150,
                            'url'       => './grupper/ungdomsteater-13-18-ar/'
                        ),array(
                            'label'     => 'Ungvoksenteater: 18-23 år',
                            'postId'    => 152,
                            'url'       => './grupper/ungvoksenteater-18-23-ar/'
                        ),array(
                            'label'     => 'Voksenteater: 25+ år',
                            'postId'    => 154,
                            'url'       => './grupper/voksenteater-25-ar/'
                        )
                    );

                    foreach($ageGroupArray as $ageGroup){
                        $backgroundSrcId = get_post_meta( $ageGroup['postId'], 'service_image', true);
                        $backgroundSrc = wp_get_attachment_image_url( $backgroundSrcId, 'full');

                        echo '<a class="service" href="'.$ageGroup['url'].'" style="background-image: url('.($backgroundSrc?$backgroundSrc:'').')">';
                            echo '<span class="text-centered" href="#">'.$ageGroup['label'].'</span>';
                        echo '</a>';
                    }
                ?>
            </div>
        </div>
        <a class="btn btn-primary" href="./kontakt/">Kontakt oss!</a>
    </section>
</section>

<?php get_footer(); ?>