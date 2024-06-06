<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\list_staff.php';

    $current_directory_url = content_url().'/QL_Du_An/views/user/listStaff';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'list_staff_style', $current_directory_url.'/index.css' );

?>

<div class="text-[50px]">
    Danh Sách thành viên
</div>

<div>
    <?php foreach($Staffs as $key => $staff):?>
        <div class ="p-[25px_10px_0_10px]
                    m-[10px_10px_10px_10px]
                    border-solid
                    border-2 
                    border-indigo-600
                    border-l-0
                    border-b-0
                    ">
        <div class="grid grid-cols-2 gap-1">        
            <div class="img img-staff flex justify-center items-center col-span-1 p-[0_10px_10px_0]">
                <img src="<?php echo $staff->Avatar; ?>" 
                alt=""
                width="300"
                >
            </div>            
            <div class="overflow-hidden whitespace-normal overflow-ellipsis text-left
                            p-[0_0_0_5px]
                            m-[0_0_0_0]
                            border-l-solid
                            border-l-2 
                            border-l-indigo-600           
                ">
                <div>
                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Họ tên: <?php echo $staff->Name; ?>
                    </div>

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Giới tính: <?php echo $staff->Gender; ?>
                    </div>

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Ngày sinh: <?php echo $staff->BirthDay; ?>
                    </div>

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Số điện thoại: <?php echo $staff->Phone; ?>
                    </div>

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Email: <?php echo $staff->Email; ?>
                    </div>

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Địa chỉ: <?php echo $staff->Address; ?>
                    </div>

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Chức vụ: <?php echo $staff->Position; ?>
                    </div>  

                    <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                        Trạng thái: <?php echo $staff->Status; ?>
                    </div>

                </div>
            </div>
            
        </div>

        </div>        
    <?php endforeach ?>

</div>
<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>