<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Learn WordPress</title> -->
    <!-- Theme support added in functions.php for title -->
    <?php wp_head();?>
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="<?php echo home_url();?>">

                <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);

                        //the_custom_logo();
                    }
                ?>
                <img class="" src="<?php echo $logo[0]?>" alt="<?php echo get_bloginfo()?>">


            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                wp_nav_menu(
                    array(
                        'menu' => 'top-menu',
                        'theme-location' => 'top-menu',
                        'container' => '',
                        'menu_class' => 'navbar-nav ml-auto',
                        'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                        //if you have icons before menu, icon html code can be added in dashboard menu name
                    )
                )
                ?>
            </div>
        </nav>
        <div class="container">
           
        </div>
    </header>