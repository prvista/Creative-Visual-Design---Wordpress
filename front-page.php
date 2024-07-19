<?php get_header()?>
<main data-barba="container" data-barba-namespace="home">

    <section class="homeBanner">
            <div class="container">
                <div class="homeBanner__wrapper">
                    <div class="homeBanner__text">
                        <h1><?php the_field('banner-title')?></h1>
                        <p><?php the_field('banner-content')?></p>
                        <a href="" class="btn bg--primary--home">EXPLORE MORE</a>
                    </div>

                    <div class="homeBanner__img">
                        <img src="<?php echo get_template_directory_uri() ?>/img/home/Hero.png" alt="img">
                    </div>


                </div>
            </div>
    </section>

    <section class="homeServices">
        <div class="container">
            <div class="homeServices__wrapper">

            <?php 
                $services = new WP_Query(array(
                    'post_type' => 'services',
                    'posts_per_page' => -1
                ))
            ?>

            <?php if($services->have_posts()) : while($services->have_posts()) : $services->the_post()?>

                <div class="homeServices__card">
                    <img src="<?php the_field('service-img')?>" alt="">
                    <div class="homeServices__text">
                        <h2><?php the_field('service_title')?></h2>
                        <p><?php the_field('service-text')?></p>
                        <a href="" class="btn bg--primary">GET A QUOTE</a>
                    </div>
                </div>

            
            <?php endwhile; 
                else:
                    echo "No more service";
                endif;
                wp_reset_postdata();
            ?>



            </div>
        </div>
    </section>

    <section class="homeAbout">
        <div class="container">
            <div class="homeAbout__wrapper">

                <div class="homeAbout__img">
                    <!-- <img src="./img/home/unsplash_GIy2ly37Kw8.png" alt="img"> -->
                    <img src="<?php the_field('about-img')?>" alt="">
                    <img src="<?php the_field('about-img-layer')?>" alt="">       
                </div>

                <div class="homeAbout__text">
                    <h2><?php the_field('about-title')?></h2>
                    <p><?php the_field('about-text')?></p>
                </div>

            </div>
        </div>
    </section>

    <section class="homeTrend">
        <div class="container">

            <div class="homeTrend__title">
                <h2>Latest Trends</h2>
                <h3>Latest Happenings in virtual space</h3>
            </div>
            <div class="homeTrend__wrapper">
            

            <?php 
                $latests = new WP_Query(array(
                    'post_type' => 'latests',
                    'posts_per_page' => 4,
                ))
            ?>

            <?php if($latests->have_posts()) : while($latests->have_posts()) : $latests->the_post()?>


                <div class="homeTrend__card">
                <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                ?>
                    
                    <div class="homeTrend__card--details">
                        <h3><?php the_title()?></h3>
                        <p><?php the_excerpt()?></p>
                        <a href="<?php the_permalink()?>" class="">Read more...</a> 
                    </div>
                 
                </div>

                            <?php endwhile; 
                else:
                    echo "No more service";
                endif;
                wp_reset_postdata();
            ?>

            </div>
        </div>
    </section>

    <?php get_template_part('partials/part', 'cta')?>

   

<?php get_footer() ?>

</main>

