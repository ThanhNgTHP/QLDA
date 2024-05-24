<?php 

include_once getenv('DIR_CONTROLLERS').'\\project_category.php';

$current_directory_url = content_url().'/QL_Du_An/views/project_category';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<br>
<br>
<br>
<br>
<button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Thêm
</button>
<?php foreach($projectCategories as $key => $projectCategory): ?>
    <div class="grid grid-cols-3 gap-1 
                p-[25px_0_0_0]
                m-[50px_0_0_0]
                border-t-solid
                border-t-2 
                border-t-indigo-600">

        <div class="text-xl hidden" style="margin: auto;">
            <input type="text" name="id" value="<?php echo $projectCategory->ID; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <input type="text" name="name" value="<?php echo $projectCategory->Name; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <input type="text" name="description" value="<?php echo $projectCategory->Description; ?>">
        </div>

        <div style="margin: auto;">
            <button type="submit" name="edit" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Sửa
            </button>
            <button type="submit" name="delete" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Xóa
            </button>
        </div>
    </div>
<?php endforeach; ?>
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>