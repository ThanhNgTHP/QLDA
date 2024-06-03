<?php 

include_once getenv('DIR_CONTROLLERS').'\\event.php';

$current_directory_url = content_url().'/QL_Du_An/views/event';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

2134

<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>