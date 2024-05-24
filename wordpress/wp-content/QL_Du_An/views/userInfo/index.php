<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\user_info.php';

    $current_directory_url = content_url().'/QL_Du_An/views/userInfo';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );
    
?>

<div class="w-full">
    
    <div class = "text-[20px] "> 
        <img class="w-[500px] m-auto" src="<?php echo $User->Staff->Avatar ?>" alt="Avatar" style="width: 300px;"> 
        <div class = "text-[40px] p-[10px_0_0_0]">
            Thông tin cá nhân:
        </div>
        <?php echo "Họ tên: " . $User->Staff->Name ?><br>
        <?php echo "Giới tính: " . $User->Staff->Gender ?><br>
        <?php echo "Ngày sinh: " . $User->Staff->BirthDay ?><br>
        <?php echo"SĐT: " . $User->Staff->Phone ?><br>
        <?php echo "Email: " . $User->Staff->Email ?><br>
        <?php echo "Địa chỉ: " . $User->Staff->Address ?><br>
        <?php echo "Trạng thái: " . $User->Staff->Status ?><br>

        <div class = "text-[40px] p-[10px_0_0_0]">
            Thông tin tài khoản:
        </div>
        <?php echo "Tên tài khoảm: " . $User->Account->Name ?><br>
        <?php echo "Trạng thái tài khoản: " . $User->Account->Status ?><br>
        
        
        <?php echo "Tên quyền: " . $User->Permission->Name ?><br>
        <?php echo "Ghi chú: " . $User->Permission->Note ?><br>

        <div class = "text-[40px] p-[10px_0_0_0]">
            Bằng cấp chứng chỉ:
        </div>
        <?php foreach($User->Qualifications as $key => $Qualification): ?>
            <?php echo "Bằng cấp chứng chỉ: " . $Qualification->Name ?><br>
            <?php echo "Ngày cấp: " . $Qualification->Date ?><br>
            <?php echo "Nơi cấp: " . $Qualification->Address ?><br>
        <?php endforeach; ?>

        <div class = "text-[40px] p-[10px_0_0_0]">
            Phòng ban - Nhóm:
        </div>
        <?php echo "Tên phòng ban: " . $User->Department->Name ?><br>
        <?php echo "Mô tả: " . $User->Department->Description ?><br>

        <?php echo "Tên nhóm: " . $User->Team->Name ?><br>
        <?php echo "Trường nhóm: " . $User->Team->Leader ?><br>
    </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
    wp_enqueue_script( 'userInfo_script', $current_directory_url.'/index.js', array(), time(), true);
?>