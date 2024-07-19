<?php get_header()?>

<!-- ABOUT PAGE -->
<!-- FOR ABOUT PAGE ONLY -->
<?php if(is_page('about')) {?>
<main data-barba="container" data-barba-namespace="about">

    <section class="aboutBanner">
            <div class="container">
                <div class="aboutBanner__wrapper">

                    <div class="aboutBanner__text">
                        <p>Things you need to know</p>
                        <h2><?php the_field('about-title')?></h2>
                        <p><?php the_field('about-text')?></p>
                        
            
                        
                        <div class="about__icons">
                            <ul>
                                <li><i class="fa-brands fa-facebook"></i></li>
                                <li><i class="fa-brands fa-twitter"></i></li>
                                <li><i class="fa-brands fa-instagram"></i></li>
                                <li><i class="fa-brands fa-youtube"></i></li>
                            </ul>
                        </div>

                    </div>

                    <div class="aboutBanner__img">
                    <img src="<?php the_field('about-img')?>" alt="">
                    </div>
                </div>
            </div>
    </section>

    <div class="arrow__down">
        <a href="#about-down"><i class="fa-solid fa-chevron-down"></i></a>
    </div>

    <section class="aboutProject" id="about-down">
        <div class="container">
            <div class="aboutProject__title">
                <h2>My Recent Projects</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>

            <div class="aboutProject__wrapper">


            <?php 
                $projects = new WP_Query(array(
                    'post_type' => 'projects',
                    'posts_per_page' => -1
                ))
            ?>

            <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post()?>


                <div class="aboutProject__card">
                    <img src="<?php the_field('project-img')?>" alt="">
                    
                    <div class="aboutProject__card--details">
                        <h3><?php the_title()?></h3>
                        <p><?php the_content()?></p>
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
    </main>
    <?php }?>
<!-- END ABOUT -->


<!-- UPDATE PAGE -->
<?php if(is_page('update')) {?>
<main data-barba="container" data-barba-namespace="update">


    <section class="update">
        <div class="container">
            <div class="update__title">
                <h1>Latest Trend</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, provident?</p>
            </div>
            <div class="update__wrapper">
                <div class="update__left">


                <?php 
                $latests = new WP_Query(array(
                    'post_type' => 'latests',
                    'posts_per_page' => 2,
                    'offset' => 1
                ))
                ?>

                <?php if($latests->have_posts()) : while($latests->have_posts()) : $latests->the_post()?>


                    <div class="update__content">
                    <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>

                        <ul>
                            <li><i class="fa-solid fa-user"></i> <?php the_author()?></li>
                            <li><i class="fa-solid fa-calendar-days"></i> <?php echo get_the_date('M j, Y');?></li>
                            <li><i class="fa-solid fa-tags"></i> <?php the_field('categories-tag')?></li>
                        </ul>
                        <h2><?php the_title()?></h2>
                        <p><?php the_content()?></p>
                        <a href="">Read more...</a>
                    </div>

                    <?php endwhile; 
                    else:
                        echo "No more service";
                    endif;
                    wp_reset_postdata();
                    ?>
                    

                    <span class="line"></span>





                </div>
                <div class="update__right">
                    <div class="update__categories">
                        <h3>CATEGORIES</h3>
                        <table class="table__catagories">
                            <tr>
                                <td>Web Design</td>
                                <td>(2)</td>
                            </tr>
                            <tr>
                                <td>Web Development</td>
                                <td>(3)</td>
                            </tr>
                            <tr>
                                <td>Wire Frame</td>
                                <td>(1)</td>
                            </tr>
                            <tr>
                                <td>Social Media</td>
                                <td>(2)</td>
                            </tr>
                        </table>
                    </div>

                    <span class="line"></span>


                    <div class="update__recent">
                        <h3>RECENT POST</h3>


                    <?php 
                        $recents = new WP_Query(array(
                            'post_type' => 'recents',
                            'posts_per_page' => 3,
                        ))
                    ?>
                    <?php if($recents->have_posts()) : while($recents->have_posts()) : $recents->the_post()?>

                        <div class="update__recent__details">
                            <img src="<?php the_field('recent-img')?>" alt="">

                            <div class="update__recent--text">
                                <h4><?php the_title()?></h4>
                                <p><?php echo get_the_date('M j, Y');?></p>
                            </div>
                        </div>

                    <?php endwhile; 
                        else:
                            echo "No more service";
                        endif;
                        wp_reset_postdata();
                    ?>

                    </div>

                    <span class="line"></span>


                    <div class="update__tags">
                        <h3>TAGS</h3>
                        <div class="update__tags__wrapper">
                            <div class="update__tags__top">
                                <a href="" class="button bg--tags">WEB DESIGN</a>
                                <a href="" class="button bg--tags">WIRE FRAME</a>
                            </div>
    
                            <div class="update__tags__middle">
                                <a href="" class="button bg--tags">WEB DEVELOPMENT</a>
                                <a href="" class="button bg--tags">LOGO</a>
                            </div>
    
                            <div class="update__tags__bottom">
                                <a href="" class="button bg--tags">VECTOR</a>
                                <a href="" class="button bg--tags">SOCIAL MEDIA</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php get_template_part('partials/part', 'cta')?>
    </main>
    <?php }?>
<!-- END UPDATE -->




<!-- CONTACT PAGE -->
<?php if(is_page('contact')) {?>
<main data-barba="container" data-barba-namespace="contact">

    <section class="contact">
        <div class="container">
            <div class="contact__wrapper">

                <div class="contact__text">
                   <div class="contact__title">
                    <h2><?php the_field('contact-title')?></h2>
                    <p><?php the_field('contact-text')?></p>
                   </div>
                   
                   <table class="contact--details"> 
                    <tr>
                        <td><i class="fa-solid fa-phone-flip"></i></td>
                        <td><p><?php the_field('contact-num')?></p></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-envelope"></i></td>
                        <td><p><?php the_field('contact-email')?></p></td>
                    </tr>
                    <tr>
                        <td><i class="fa-solid fa-map-pin"></i></td>
                        <td><p><?php the_field('contact-address')?></p></td>
                    </tr>
                   </table>


                    <div class="contact__icons">
                        <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-twitter"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa-brands fa-youtube"></i></li>
                        </ul>
                     </div>

                </div>

                <div class="contact__page">
                    <form action="" class="contact__input">
                        <input type="text" placeholder="NAME">
                        <input type="text" placeholder="EMAIL">
                        <textarea name="" id="" placeholder="MESSAGE"></textarea>
                        <a href="" class="btn bg--primary">SEND MESSAGE</a>
                    </form>


                </div>
            </div>
        </div>
    </section>
    </main>
    <?php }?>
<!-- END CONTACT -->


<?php get_footer() ?>