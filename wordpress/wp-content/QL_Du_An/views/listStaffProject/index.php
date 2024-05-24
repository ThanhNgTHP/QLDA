<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\list_staff_project.php';

    $current_directory_url = content_url().'/QL_Du_An/views/listStaffProject';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<div>
    <div class="text-[50px]">
        Danh Sách Thành Viên <?php echo "(".count($Staffs) . " thành viên)";?>
    </div>
    <div>
    <?php foreach($groups as $key => $group): ?>
            <?php $count = 0; ?>
            <?php foreach($group as $key => $staff): ?>
                <?php if($count!=0): ?>
                    <?php $Team = $staff->GetStaffTeam(); ?>
                    <?php $Job = $Team->GetTeamJob(); ?>
                    <div class="text-[30px]">
                        <?php echo "Nhóm: ". $Team->Name . " - " . $Job->Name; ?>
                    </div>

                    <?php $count++; ?>
                <?php endif; ?>
                <div class="grid grid-cols-4 gap-1
                        p-[25px_0_0_0]
                        m-[0_0_50px_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">
                <img 
                src="<?php echo $staff->Avatar; ?>" 
                alt="<?php echo 'Avatar ' . $staff->Name; ?>"
                style="width: 300px;"
                >
                
                <?php echo "Họ và tên: ". $staff->Name; ?><br>
                <?php echo "Giới tính: ". $staff->Gender; ?><br>
                <?php echo "Chức vụ: ". $staff->Position; ?><br>
                <?php echo "Trạng thái: ". $staff->Status; ?><br>
                </div>
            <?php endforeach ?>
        <?php endforeach ?>
    </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>