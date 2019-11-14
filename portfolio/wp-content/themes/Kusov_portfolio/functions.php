<?php
add_action('wp_enqueue_scripts', 'portfolio_styles');
add_action('wp_footer', 'portfolio_scripts');
add_action( 'after_setup_theme', 'MenuPorfolio' ); // регисрируем верхнее меню

function MenuPorfolio() {
	register_nav_menu( 'MenuPorfolio', 'top' );
}

function portfolio_styles(){
    // echo "123";
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style( 'fancy_style', get_template_directory_uri() . '/assets/css/jquery.fancybox-1.3.4.css' );

}

function portfolio_scripts(){
    wp_deregister_script('jquery'); // удаляет ранее зарегестрированую библиотеку jquery
    wp_register_script( 'jquery', '//code.jquery.com/jquery-2.2.4.min.js');
	wp_enqueue_script( 'jquery' );
    wp_enqueue_script('fancy_script', get_template_directory_uri() . '/assets/js/jquery.fancybox-1.3.4.js', (jquery), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/scripts.js', [jquery], null, true);
}






?>