<?php 
    include_once getenv('DIR_MODELS') . '/Event.php';
    include_once getenv('DIR_CONTROLLERS').'\\event_detail.php';

    $current_directory_url = content_url().'/QL_Du_An/views/eventDetail';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'eventDetail_style', $current_directory_url.'/index.css' );

?>
    <div>
        <div class="text-[40px] text-center">
            <?php echo $event->Name; ?>
        </div>

        <br>

        <img class="m-auto"
            src="<?php echo $event->Image; ?>" 
            alt=""
            style="width: 750px;"
        >

        <br>

        <p class="m-[0_0_0_20px] text-justify indent-10">
            <?php echo $event->Content; ?>
        </p>

        <br>

        <p class="m-[0_0_10px_10px] italic">
            *Ghi chú:.<?php echo $event->Note ?>
        </php>
    </div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>