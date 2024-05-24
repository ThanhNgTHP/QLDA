<?php 
    spl_autoload_register(function ($class_name) {
        include 'models/' . $class_name . '.php';
    });

    $current_directory = content_url().'/QL_Du_An/views/Introduce';
	wp_enqueue_style( 'login_style', $current_directory.'/index.css' );
?>