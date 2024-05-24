<?php 

include_once getenv('DIR_CONTROLLERS').'\\qualification.php';

$current_directory_url = content_url().'/QL_Du_An/views/qualification';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<br>
<br>
<br>
<br>
<button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Thêm
</button>
<?php foreach($qualifications as $key => $qualification): ?>
    <div class="grid grid-cols-5 gap-1 
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">
        <div class="text-xl" style="margin: auto;">
            <input type="text" name="name" value="<?php echo $qualification->Name; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <input type="text" name="date" value="<?php echo $qualification->Date; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <input type="text" name="address" value="<?php echo $qualification->Address; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <select name="staff-id" id="">
                <?php $staffSelect = $qualification->QualificationStaff();?>
                <option value="<?php echo $staffSelect->ID; ?>"><?php echo $staffSelect->Name . '-' . $staffSelect->ID; ?></option>
                <?php foreach(Staff::GetAllStaff() as $key => $staff): ?>
                    <?php if($staffSelect->ID !== $staff->ID):?>
                    <option value="<?php echo $staff->ID; ?>"><?php echo $staff->Name . '-' . $staff->ID; ?></option>
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
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>