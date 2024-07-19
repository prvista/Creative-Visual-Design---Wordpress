<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">   -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php is_front_page() ? bloginfo('title') : wp_title('')?></title>
  <link rel="shortcut icon" href="./img/home/Brand.svg">
</head>
<body data-barba="wrapper">
<?php wp_head()?>

<div class="fixed top-0 left-0 z-50 w-full h-screen scale-y-0 bg-dark" id="page-transition"></div>

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

