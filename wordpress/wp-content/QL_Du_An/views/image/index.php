<?php 

include_once getenv('DIR_CONTROLLERS').'\\image.php';

$current_directory_url = content_url().'/QL_Du_An/views/image';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<br>
<button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Thêm
</button>
<br>
<!-- <div class="text-2xl">
    Danh sách ảnh của dự án: Hệ Thống Điện Tử Tự Động Giám Sát Thi Thực Hành
</div> -->

    <?php foreach($images as $key => $image): ?>
    <form action="http://localhost/wordpress/wp-admin/admin.php?page=Dashboard&view=image" method="post" enctype="multipart/form-data">
        
        <div class="grid grid-cols-4 gap-1 
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">

            <div class="text-xl hidden" style="margin: auto;">
                <input type="text" name="id" value="<?php echo $image->ID; ?>">
            </div>
                            
            <div class="relative">
                <input name="path" id="imageInput-<?php echo $key; ?>" class="imageInput hidden" type="file" accept="image/*">
                <img class="displayImage-<?php echo $key; ?> inline w-full" src="<?php echo $image->Path ?>" alt="<?php echo $image->Name ?>"> 
                
                <!-- <div class="absolute top-0 left-0 bottom-0 right-0">
                    <div class="w-0 h-0 border-l-[10px] border-l-transparent border-r-[10px] border-r-transparent border-b-[10px] border-b-solid border-b-blue-500"></div>
                    <div class="w-[20px] h-[20px] bg-red-600"></div>
                </div> -->

                <div class="absolute top-0 left-0 bottom-0 right-0">
                    <label for="imageInput-<?php echo $key; ?>">
                        <div class="w-full h-full hover:bg-white hover:opacity-50">
                        
                        </div>
                    </label>
                </div>
            </div>
            
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="<?php echo $image->Name; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="project-id" id="">
                    <?php $projectSelect = $image->GetImageProject(); ?>
                    <option value="<?php echo $projectSelect->ID; ?>"><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                    <?php foreach(Project::GetAllProject() as $key => $project): ?>
                        <?php if($project): ?>
                        <option value="<?php $project->ID; ?>"><?php echo $project->Name . '-' . $project->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
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
    </form>
    <?php endforeach; ?>
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>