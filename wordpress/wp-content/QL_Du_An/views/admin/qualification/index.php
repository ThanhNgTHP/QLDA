<?php 

include_once getenv('DIR_CONTROLLERS').'\\qualification.php';

$current_directory_url = content_url().'/QL_Du_An/views/qualification';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="qualificationName" type="text" placeholder="Tìm Kiếm">
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
                    <div style="margin: auto;">Tên bằng cấp chứng chỉ</div>
                    <div style="margin: auto;">Ngày cấp</div>
                    <div style="margin: auto;">Nơi cấp</div>
                    <div style="margin: auto;">Tên thành viên</div>
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
                    <input type="text" name="date" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="address" value="">
                </div>


                <div class="text-xl" style="margin: auto;">
                    <select name="staffID" id="">
                        <?php foreach(Staff::GetAllStaff() as $key => $staff): ?>
                            <option value="<?php echo $staff->ID; ?>"><?php echo $staff->Name; ?> - <?php echo $staff->ID; ?></option>
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

    <?php foreach($qualifications as $key => $qualification): ?>
        <form action="" method="post">
            <div class="grid grid-cols-5 gap-1 
                                p-[25px_0_0_0]
                                m-[50px_0_0_0]
                                border-t-solid
                                border-t-2 
                                border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $qualification->ID; ?>">
                </div>                            
                                
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
                    <select name="staffID" id="">
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
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>