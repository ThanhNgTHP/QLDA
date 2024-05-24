<?php 

include_once getenv('DIR_CONTROLLERS').'\\Project.php';

$current_directory_url = content_url().'/QL_Du_An/views/Project';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<div class="overflow-auto">
    <br>
    <br>
    <br>
    <br>
    <div class="text-xl grid grid-cols-8 gap-1 
                    w-[200%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600" >
                    <div style="margin: auto;">Tên dự án</div>
                    <div style="margin: auto;">Ngày bắt đầu</div>
                    <div style="margin: auto;">Ngày kết thúc</div>
                    <div style="margin: auto;">Trạng Thái</div>
                    <div style="margin: auto;">Liên hệ</div>
                    <div style="margin: auto;">Mô tả</div>
                    <div style="margin: auto;">Loại dự án</div>
                    <div style="margin: auto;">Công cụ</div>
                    
    </div>
    <?php foreach($projects as $key => $project): ?>
        <div class="grid grid-cols-8 gap-1 
                    w-[200%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="begin" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="end" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="status" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="contact" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="description" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <?php $projectsrojectCategorySelect = $project->GetProjectProjectCategory(); ?>
                <select name="project-category-id" id="">
                    <option value="<?php echo $projectsrojectCategorySelect->ID; ?>"><?php echo $projectsrojectCategorySelect->Name; ?>  - <?php echo $projectsrojectCategorySelect->ID; ?></option>
                    <?php foreach(ProjectCategory::GetAllProjectCategory() as $key => $projectCategory): ?>
                        <?php if($projectsrojectCategorySelect->Name !== $projectCategory->Name): ?>

                            <option value="<?php echo $projectCategory->ID; ?>"><?php echo $projectCategory->Name; ?> - <?php echo $projectCategory->ID; ?></option>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div style="margin: auto;">
                <button type="submit" name="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Thêm
                </button>
            </div>
        </div>

        <?php break; ?>
    <?php endforeach; ?>
    <?php foreach($projects as $key => $project): ?>
        <div class="grid grid-cols-8 gap-1 
                    w-[200%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="<?php echo $project->Name; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="begin" value="<?php echo $project->Begin; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="end" value="<?php echo $project->End; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="status" value="<?php echo $project->Status; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="contact" value="<?php echo $project->Contact; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="description" value="<?php echo $project->Description; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <?php $projectsrojectCategorySelect = $project->GetProjectProjectCategory(); ?>
                <select name="project-category-id" id="">
                    <option value="<?php echo $projectsrojectCategorySelect->ID; ?>"><?php echo $projectsrojectCategorySelect->Name; ?>  - <?php echo $projectsrojectCategorySelect->ID; ?></option>
                    <?php foreach(ProjectCategory::GetAllProjectCategory() as $key => $projectCategory): ?>
                        <?php if($projectsrojectCategorySelect->Name !== $projectCategory->Name): ?>

                            <option value="<?php echo $projectCategory->ID; ?>"><?php echo $projectCategory->Name; ?> - <?php echo $projectCategory->ID; ?></option>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div style="margin: auto;">
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    <a href="http://localhost/wordpress/wp-admin/admin.php?page=Dashboard&view=image">
                        Ảnh
                    </a>
                </button>
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Sửa
                </button>
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Xóa
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>