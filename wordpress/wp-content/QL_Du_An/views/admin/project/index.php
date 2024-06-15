<?php 

include_once getenv('DIR_CONTROLLERS').'\\Project.php';

$current_directory_url = content_url().'/QL_Du_An/views/Project';

wp_enqueue_style( 'project_style', $current_directory_url.'/index.css' );

?>

<br>
<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="projectName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>
<br>

<div class="overflow-auto">
    <br>
    <br>
    <div class="text-xl grid grid-cols-11 gap-1 
                    w-[220%]
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
                    <div style="margin: auto;">Ngân sách dự kiến</div>
                    <div style="margin: auto;">Ngân sách thực tế</div>
                    <div style="margin: auto;">Tiến độ</div>
                    <div style="margin: auto;">Loại dự án</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-11 gap-1 
                    w-[220%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="begin" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="end" value="">
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
                    <input type="number" name="targetBudget" value="" step="any">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="actualBudget" value="" step="any">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="progress" value="" min="0" max="100">
                </div>

                <?php foreach($projects as $key => $project): ?>
                    <div class="text-xl" style="margin: auto;">
                        <?php $projectCategorySelect = $project->GetProjectProjectCategory(); ?>
                        <select name="projectCategoryID" id="">
                            <option value="<?php echo $projectCategorySelect->ID; ?>"><?php echo $projectCategorySelect->Name; ?>  - <?php echo $projectCategorySelect->ID; ?></option>
                            <?php foreach(ProjectCategory::GetAllProjectCategory() as $key => $projectCategory): ?>
                                <?php if($projectCategorySelect->Name !== $projectCategory->Name): ?>
                                    <option value="<?php echo $projectCategory->ID; ?>"><?php echo $projectCategory->Name; ?> - <?php echo $projectCategory->ID; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div style="margin: auto;">
                        <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Thêm
                        </button>
                    </div>
                <?php break; ?>
                <?php endforeach; ?>

                <?php if(count($projects) == 0): ?>
                    <div class="text-xl" style="margin: auto;">
                        <select name="projectCategoryID" id="">
                            <?php foreach(ProjectCategory::GetAllProjectCategory() as $key => $projectCategory): ?>
                                <option value="<?php echo $projectCategory->ID; ?>"><?php echo $projectCategory->Name; ?> - <?php echo $projectCategory->ID; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div style="margin: auto;">
                        <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Thêm
                        </button>
                    </div>
                <?php endif; ?>
        </div>

    </form>

    <?php $projects = array_reverse($projects);?>
    <?php foreach($projects as $key => $project): ?>
        <form action="" method="post">

        <div class="grid grid-cols-11 gap-1 
                    w-[220%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">

            <div class="text-xl hidden" style="margin: auto;">
                <input type="text" name="id" value="<?php echo $project->ID; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="<?php echo $project->Name; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="date" name="begin" value="<?php echo $project->Begin; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="date" name="end" value="<?php echo $project->End; ?>">
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
                <input type="number" name="targetBudget" value="<?php echo $project->TargetBudget; ?>" step="any">
            </div>

            
            <div class="text-xl" style="margin: auto;">
                <input type="number" name="actualBudget" value="<?php echo $project->ActualBudget; ?>" step="any">
            </div>
            
            <div class="text-xl" style="margin: auto;">
                <input type="number" name="progress" value="<?php echo $project->Progress; ?>" min="0" max="100">
            </div>

            <div class="text-xl" style="margin: auto;">
                <?php $projectsrojectCategorySelect = $project->GetProjectProjectCategory(); ?>
                <select name="projectCategoryID" id="">
                    <option value="<?php echo $projectsrojectCategorySelect->ID; ?>"><?php echo $projectsrojectCategorySelect->Name; ?>  - <?php echo $projectsrojectCategorySelect->ID; ?></option>
                    <?php foreach(ProjectCategory::GetAllProjectCategory() as $key => $projectCategory): ?>
                        <?php if($projectsrojectCategorySelect->Name !== $projectCategory->Name): ?>

                            <option value="<?php echo $projectCategory->ID; ?>"><?php echo $projectCategory->Name; ?> - <?php echo $projectCategory->ID; ?></option>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div style="margin: auto;">
                <button type="submit" name="method" value="edit" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Sửa
                </button>
                <button type="submit" name="method" value="delete" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Xóa
                </button>
            </div>
        </div>
    </form>

    <?php endforeach; ?>
</div>

<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'project_script', $current_directory_url.'/index.js', array(), time(), true);

?>