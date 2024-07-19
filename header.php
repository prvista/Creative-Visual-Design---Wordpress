<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php is_front_page() ? bloginfo('title') : wp_title('')?></title>
  <link rel="shortcut icon" href="./img/home/Brand.svg">
</head>
<body>
<?php wp_head()?>
    <header class="header">
        <div class="container">
            <div class="header__wrapper">
                <!-- branding -->
                <div class="branding">
                <img src="<?php echo get_template_directory_uri()?>/img/home/Brand.svg" alt="img">
                    <h2>Creative <span>Visual </span>Design</h2>
                </div>
                <div class="header__nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'header_menu'
                ))?>
                </div>



                <!-- toggle menu -->
                 <div class="toggle__menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </div>
        </div>
    </header>