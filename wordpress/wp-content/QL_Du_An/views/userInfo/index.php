<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\user_info.php';

    $current_directory_url = content_url().'/QL_Du_An/views/userInfo';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

    wp_enqueue_style( 'userInfo_style', $current_directory_url.'/index.css', array(), time());
?>
<!-- thay đổi mật khẩu thành công, thất bại ? -->   
<div class="<?php echo isset($isConfirmPassword) ? "" : "hidden"  ?>
            overlay state-change-password fixed top-0 left-0 bottom-0 right-0  bg-black bg-opacity-50 z-[9998] flex justify-center items-center">
    <div class="bg-white">
        <div class="w-[600px] h-[100px] flex items-center justify-center outline
                            p-[10px_20px_10px_20px] 
                            shadow-[50px_40px_20px_0px_rgba(0,0,0,0.5)]
                            bg-white rounded-md
                            ">
            <?php echo $isConfirmPassword ? "success" : "Mật khẩu không tồn tại hoặc trùng khớp với mật khẩu cũ"  ?>

        </div>
    </div>
</div>

<div class="overlay change-password-container hidden fixed top-0 left-0 bottom-0 right-0  bg-black bg-opacity-50 z-[9998] flex justify-center items-center">
    <div class="change-password bg-white">
        <form id="form-password" action="" method="post">
            <div class="w-[100%] outline
                        p-[10px_20px_10px_20px] 
                        shadow-[50px_40px_20px_0px_rgba(0,0,0,0.5)]
                        bg-white rounded-md
                        ">

                <div class=" mt-[40px] mb-[40px]">
                    <label for="current-password">Mật khẩu cũ</label>
                    <input id="current-password" class="input-password outline ml-[60px] p-[0_0_0_5px]" name="current-password" type="password">
                </div>

                <div class=" mt-[40px] mb-[40px]">
                    <label for="new-password">Mật khẩu mới</label>
                    <input id="new-password" class="input-password outline ml-[50px] p-[0_0_0_5px]" name="new-password" type="password">
                </div>

                <div class="verify-password  mt-[40px] mb-[40px]">
                    <label for="verify-password">Xác thực mật khẩu</label>
                    <input id="verify-password" class="input-password outline ml-[10px] p-[0_0_0_5px]" name="verify-password" type="password">
                </div>


                <div id="alert-change-password" class="hidden text-center mb-[20px] text-red-600">
                    <label for="">Mật khẩu không trùng khớp hoặc chưa nhập mật khẩu</label>
                </div>
                
                <div class="text-center">
                    <button
                        class="confirm-password bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        name="method"
                        value="confirm_password"
                        >Xác nhận</button>
                </div>
                
            </div>
        </form>
    </div>
</div> 

<div class="w-full m-[0_0_0_10px]">
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
            Bằng cấp chứng chỉ:
        </div>
        <?php foreach($Qualifications as $key => $Qualification): ?>
            <?php echo "Bằng cấp chứng chỉ: " . $Qualification->Name ?><br>
            <?php echo "Ngày cấp: " . $Qualification->Date ?><br>
            <?php echo "Nơi cấp: " . $Qualification->Address ?><br>
        <?php endforeach; ?>

        <!-- <div class = "text-[40px] p-[10px_0_0_0]">
            Phòng ban - Nhóm:
        </div>
        <?php echo "Tên phòng ban: " . $Department->Name ?><br>
        <?php echo "Mô tả: " . $Department->Description ?><br>

        <?php foreach($Teams as $key => $Team): ?>
            <?php echo "Tên nhóm: " . $Team->Name ?><br>
            <?php echo "Trường nhóm: " . $Team->Leader ?><br>
        <?php endforeach; ?> -->
    </div>

    <div class = "text-[40px] p-[10px_0_0_0]">
            Thông tin tài khoản:
        </div>
        <?php echo "Tên tài khoảm: " . $User->Account->Name ?><br>
        <?php echo "Trạng thái tài khoản: " . $User->Account->Status ?><br>
        <?php echo "Tên quyền: " . $User->Permission->Name ?><br>
        <?php echo "Ghi chú: " . $User->Permission->Note ?><br>

        <button id="btn-change-password" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
        >Đổi mật khẩu</button>

    <div class = "text-[40px] p-[10px_0_0_0]">
            Danh sách công việc:
        </div>
        <div class="mr-[0] ml-[auto] col-span-4">
            <a href="http://localhost/wordpress/list-job-user/?staffID=<?php echo $User->Staff->ID ?>">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Xem
                </button>
            </a>    
        </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
    wp_enqueue_script( 'userInfo_script', $current_directory_url.'/index.js', array(), time(), true);
?>