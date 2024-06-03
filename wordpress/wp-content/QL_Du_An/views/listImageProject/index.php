<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\list_image_project.php';

    $current_directory_url = content_url().'/QL_Du_An/views/listImageProject';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<div>
    <div class="text-[30px]">
        Danh sách ảnh của Dự Án: <?php echo $ProjectName ?> 
    </div>

    <div class="grid grid-cols-3 gap-1">
    <?php 
        foreach($ProjectImages AS $key => $image):
    ?>
        <div class="text-center" style="margin: auto;">
            <img 
            src="<?php echo $image->Path ?>" 
            alt="<?php echo  $image->Name; ?>"
            style="width: 300px;"
            >
            <?php echo $image->Name ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>