<?php 
    get_header(); 
?>

<section class="page page-home">
    <section>
        <div class="container">
            <div class="content">
                <?php
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
            <div class="image-container">
                <img src="<?php echo wp_get_attachment_image_url( 53, 'full'); ?>"/>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h3 class="row text-centered">Har du en skuespiller i deg?</h3>
            <div class="service-list">
                <span class="row text-centered">Vi har tilbud til barn og ungdom i alle aldre:</span>
                <?php

                    $ageGroupArray = array(
                        array(
                            'label'     => 'Veslefrikk Mini: 2-3 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/11-13.jpg'
                        ),array(
                            'label'     => 'Veslefrikk Mini: 3-5 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/9-11.jpg'
                        ),array(
                            'label'     => 'Barneteater: 6-8 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/11-13.jpg'
                        ),array(
                            'label'     => 'Barneteater: 9-11 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/9-11.jpg'
                        ),array(
                            'label'     => 'Ungdomsteater: 11-13 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/11-13.jpg'
                        ),array(
                            'label'     => 'Ungdomsteater: 13-20 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/9-11.jpg'
                        ),array(
                            'label'     => 'Ungvoksenteater: 18-23 år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/11-13.jpg'
                        ),array(
                            'label'     => 'Voksenteater: 25+ år',
                            'imageUrl'  => get_template_directory_uri().'/images/groupImages/9-11.jpg'
                        )
                    );

                    foreach($ageGroupArray as $ageGroup){
                        echo '<a class="service" href="#" style="background-image: url('.$ageGroup['imageUrl'].')">';
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