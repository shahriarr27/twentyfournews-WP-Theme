<!DOCTYPE html>

<html lang="en" class="no-js">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- <link href="css/style_1.css" rel="stylesheet" type="text/css"/> -->
    <?php wp_head() ?>
    <!-- Modernizr JS -->
    <script src="js/modernizr-3.5.0.min.js"></script>
</head>
<body class="single">
<div class="container-fluid fh5co_header_bg">
    <div class="container">
        <div class="row">
            <div class="col-12 fh5co_mediya_center"><a href="#" class="color_fff fh5co_mediya_setting"><i
                    class="fa fa-clock-o"></i>&nbsp;&nbsp;&nbsp;Friday, 5 January 2018</a>
                <div class="d-inline-block fh5co_trading_posotion_relative"><a href="#" class="treding_btn">Trending</a>
                    <div class="fh5co_treding_position_absolute"></div>
                </div>
                <a href="#" class="color_fff fh5co_mediya_setting">Instagram’s big redesign goes live with black-and-white app</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3 fh5co_padding_menu">
            <?php 
                $custom_logo_id = get_theme_mod('custom_logo');
                $site_title = get_bloginfo('name');
                    if($custom_logo_id){ 
                        $custom_logo = wp_get_attachment_image_url($custom_logo_id, 'full');
                        ?>
                        <a class="navbar-brand" href="#">
                            <img src="<?= $custom_logo?>" alt="img" class="fh5co_logo_width"/>
                        </a>
                    <?php
                    }
                    else{ ?>
                        <h1 class="site-title fh5co_logo_width">
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php echo esc_html($site_title); ?></a>
                        </h1>
                    <?php
                    }
                ?>
            </div>
            <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://twitter.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div></a>
                </div>
                <div class="text-center d-inline-block">
                    <a href="https://fb.com/fh5co" target="_blank" class="fh5co_display_table"><div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div></a>
                </div>
                <!--<div class="d-inline-block text-center"><img src="images/country.png" alt="img" class="fh5co_country_width"/></div>-->
                <div class="d-inline-block text-center dd_position_relative ">
                    <select class="form-control fh5co_text_select_option">
                        <option>English </option>
                        <option>French </option>
                        <option>German </option>
                        <option>Spanish </option>
                    </select>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
    <div class="container padding_786">
        <nav class="navbar navbar-toggleable-md navbar-light ">
            <button class="navbar-toggler navbar-toggler-right mt-3" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                <?php 
                $custom_logo_id = get_theme_mod('custom_logo');
                $site_title = get_bloginfo('name');
                    if($custom_logo_id){ 
                        $custom_logo = wp_get_attachment_image_url($custom_logo_id, 'full');
                        ?>
                        <a class="navbar-brand" href="#">
                            <img src="<?= $custom_logo?>" alt="img" class="mobile_logo_width"/>
                        </a>
                    <?php
                    }
                    else{ ?>
                        <h1 class="site-title mobile_logo_width">
                            <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php echo esc_html($site_title); ?></a>
                        </h1>
                    <?php
                    }
                ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container' => false,
                    'menu_class' => 'navbar-nav mr-auto',
                    'walker' => new WP_Bootstrap_Navwalker(),
                ]) ?>
            </div>
        </nav>
    </div>
</div>