<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\list_staff_project.php';
        include_once getenv('DIR_MODELS') . '/Staff.php';


    $current_directory_url = content_url().'/QL_Du_An/views/listStaffProject';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

    <?php $staff_id =  0;?>
    <?php $count =  0;?>
    <?php 
    usort($groups, function ($group1, $group2) {
        return $group1['StaffID'] <=> $group2['StaffID'];
    });
    ?>
    <?php foreach($groups as $key => $group): ?>
        <?php if($group['StaffID'] != $staff_id): ?>
            <?php $count++;?>
            <?php $staff_id =  $group['StaffID'];?>
        <?php endif ?>
    <?php endforeach ?>

<div>
    <div class="text-[50px]">
        Danh Sách Thành Viên <?php echo "(".$count . " thành viên)";?>
    </div>
    <div>

    <?php $staffID =  0;?>

    <?php foreach($groups as $key => $group): ?>
        <?php if($group['StaffID'] != $staffID): ?>

                <div class="grid grid-cols-2 gap-1
                        p-[10px_0_10px_0]
                        m-[0_0_0_50px]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">
                <img 
                src="<?php echo $group['Avatar']; ?>" 
                alt="<?php echo 'Avatar ' . $group['Name']; ?>"
                style="width: 300px;"
                >
                <div class="border-l-solid
                            border-l-2 
                            border-l-indigo-600
                            p-[25px_0_0_50px]">
                            
                    <?php echo "Mã thành viên: ". $group['StaffID']; ?><br>
                    <?php echo "Họ và tên: ". $group['Name']; ?><br>
                    <?php echo "Giới tính: ". $group['Gender']; ?><br>
                    <?php echo "Chức vụ: ". $group['Position']; ?><br>
                    <?php echo "Trạng thái: ". $group['Status']; ?><br>
                </div>

                </div>
            <?php $staffID =  $group['StaffID'];?>
        <?php endif ?>
        <?php endforeach ?>
    </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>