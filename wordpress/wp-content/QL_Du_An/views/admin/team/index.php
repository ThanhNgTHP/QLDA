<?php 

include_once getenv('DIR_CONTROLLERS').'\\team.php';

$current_directory_url = content_url().'/QL_Du_An/views/team';

wp_enqueue_style( 'team_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="teamName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>

<div class="overflow-auto">
    <br>
    <br>
    <div class="text-xl grid grid-cols-5 gap-1 
                    w-[100%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600" >
                    <div style="margin: auto;">Tên nhóm</div>
                    <div style="margin: auto;">Trưởng nhóm</div>
                    <div style="margin: auto;">Phòng ban</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-5 gap-1 
                    w-[100%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="leader" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="departmentID" id="">
                        <?php foreach(Department::GetAllDepartment() as $key => $department): ?>
                            <option value="<?php echo $department->ID; ?>"><?php echo $department->Name; ?> - <?php echo $department->ID; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div style="margin: auto;">
                    <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Thêm
                    </button>
                </div>
        </div>

    </form>

    <?php $teams = array_reverse($teams);?>
    <?php foreach($teams as $key => $team): ?>
        <form action="" method="post">
            <div class="grid grid-cols-5 gap-1 
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $team->ID; ?>">
                </div>                            

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $team->Name; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="leader" value="<?php echo $team->Leader; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="departmentID" id="">
                        <?php $departmentSelect = $team->GetTeamDepartment();?>
                        <option value="<?php echo $departmentSelect->ID ?>"><?php echo $departmentSelect->Name . '-' . $departmentSelect->ID; ?></option>
                        <?php foreach(Permission::GetAllPermission() as $key => $department): ?>
                            <?php if($departmentSelect->ID !== $department->ID): ?>
                            <option  value="<?php echo $department->ID ?>"><?php echo $department->Name . '-' . $department->ID; ?></option>
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
wp_enqueue_script( 'team_script', $current_directory_url.'/index.js', array(), time(), true);

?>