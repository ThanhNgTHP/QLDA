<?php 
    include_once getenv('DIR_MODELS') . '/Event.php';
    include_once getenv('DIR_CONTROLLERS').'\\event_detail.php';

    $current_directory_url = content_url().'/QL_Du_An/views/eventDetail';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'eventDetail_style', $current_directory_url.'/index.css' );

?>

    <?php echo $event->ID; ?>
    <?php echo $event->Name; ?>
    <?php echo $event->Image; ?>
    <?php echo $event->Note; ?>

<!-- <?php echo $eventID; ?> -->
<!-- <?php echo $eventID; ?> -->

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>