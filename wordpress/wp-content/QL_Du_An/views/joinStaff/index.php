<?php 

include_once getenv('DIR_CONTROLLERS').'\\join_staff.php';

$current_directory_url = content_url().'/QL_Du_An/views/joinStaff';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>


<div class="overflow-auto">
    <br>
    <br>
    <br>
    <br>
    <?php foreach($joinStaffs as $key => $joinStaff): ?>
        <div class="grid grid-cols-4 gap-1 
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">

            <div class="text-xl" style="margin: auto;">
                <select name="staff-id" id="">
                    <?php $staffSelect = $joinStaff->GetJoinStaffStaff(); ?>
                    <option value="<?php echo $staffSelect->ID; ?>"><?php echo $staffSelect->Name . '-' . $staffSelect->ID; ?></option>
                    <?php foreach(Staff::GetAllStaff() as $key => $staff): ?>
                        <?php if($staff->ID !== $staffSelect->ID): ?>
                        <option value="<?php $staff->ID; ?>"><?php echo $staff->Name . '-' . $staff->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="" id="">
                    <?php $projectSelect = $joinStaff->GetJoinStaffProject(); ?>
                    <option value=""><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                    <?php foreach(Project::GetAllProject() as $key => $project): ?>
                        <?php if($projectSelect->ID !== $project->ID): ?>
                        <option value=""><?php echo $project->Name . '-' . $project->ID; ?></option>
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
    <?php foreach($joinStaffs as $key => $joinStaff): ?>
        <div class="grid grid-cols-4 gap-1 
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">

            <div class="text-xl" style="margin: auto;">
                <select name="staff-id" id="">
                    <?php $staffSelect = $joinStaff->GetJoinStaffStaff(); ?>
                    <option value="<?php echo $staffSelect->ID; ?>"><?php echo $staffSelect->Name . '-' . $staffSelect->ID; ?></option>
                    <?php foreach(Staff::GetAllStaff() as $key => $staff): ?>
                        <?php if($staff->ID !== $staffSelect->ID): ?>
                        <option value="<?php $staff->ID; ?>"><?php echo $staff->Name . '-' . $staff->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="" id="">
                    <?php $projectSelect = $joinStaff->GetJoinStaffProject(); ?>
                    <option value=""><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                    <?php foreach(Project::GetAllProject() as $key => $project): ?>
                        <?php if($projectSelect->ID !== $project->ID): ?>
                        <option value=""><?php echo $project->Name . '-' . $project->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div style="margin: auto;">
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