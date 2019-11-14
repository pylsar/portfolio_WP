<!DOCTYPE html>

<html lang="ru" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <!-- <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet/less" type="text/css" href="css/style.less" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="jquery.fancybox.min.css">  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <title><?php bloginfo( 'description'); ?></title>
</head>
<body>
    <header class="header">
        <div class="header__top">
            
            <nav class="header-navigation">
            <?php wp_nav_menu(array(
                'theme_location'  => 'MenuPorfolio',
                'fallback_cb'     => '',
     
            ));?>
                <!-- <ul>
                    <li><a href="#skills">my skills</a></li>
                    <li><a href="#about">about me</a></li>
                    <li><a href="#suggest">suggest</a></li>
                    <li><a href="#work">my works</a></li>
                    <li><a href="#contact">contact me</a></li>
                </ul> -->
            </nav>
            <button class="btn_menu" id="btn_menu">menu</button>
            <nav class="hamburger">
                <ul>
                    <li><a href="#skills">my skills</a></li>
                    <li><a href="#about">about me</a></li>
                    <li><a href="#suggest">suggest</a></li>
                    <li><a href="#work">my works</a></li>
                    <li><a href="#contact">contact me</a></li>
                </ul>
            </nav>
            <div class="header-toggle">
                <ul>
                    <li id="dark" class="header-toggle--dark">
                        <span>light</span>
                    </li>
                    <li id="light" class="header-toggle--light">    
                        <span>dark</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="header__text">
            <h1><?php the_field('header__name');?></h1>
            <span class="header__text--description"><?php the_field('header__text');?></span>
        </div>
    </header>