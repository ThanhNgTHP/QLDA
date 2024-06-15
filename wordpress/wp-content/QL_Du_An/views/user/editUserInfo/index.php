<?php 
include getenv('DIR_CONTROLLERS') . '/edit_user_info.php';

$current_directory = content_url() . '/QL_Du_An/views/editUserInfo';
wp_enqueue_style('edit_user_info_style', $current_directory . '/index.css');
?>

<div>
    <div class="text-[40px] text-center">
        Chỉnh sửa thông tin cá nhân
    </div>
    <div class="max-w-lg mx-auto mt-10">
        <form action="" method="post">
            <div class="text-xl hidden" style="margin: auto;">
                <input type="text" name="id" value="<?php echo $staff->ID; ?>">
            </div>
                    
            <div class="mb-4 flex items-center">
                <label for="name" class="w-1/3 text-right mr-4">Họ và tên:</label>
                <input class="w-2/3 px-3 py-2 border-2 border-cyan-500 rounded-md" type="text" name="name" value="<?php echo $staff->Name; ?>">
            </div>

            <div class="mb-4 flex items-center">
                <label for="gender" class="w-1/3 text-right mr-4">Giới tính:</label>
                <input class="w-2/3 px-3 py-2 border-2 border-cyan-500 rounded-md" type="text" name="gender" value="<?php echo $staff->Gender; ?>">
            </div>

            <div class="mb-4 flex items-center">
                <label for="birthday" class="w-1/3 text-right mr-4">Ngày sinh:</label>
                <input class="w-2/3 px-3 py-2 border-2 border-cyan-500 rounded-md" type="text" name="birthday" value="<?php echo $staff->BirthDay; ?>">
            </div>

            <div class="mb-4 flex items-center">
                <label for="phone" class="w-1/3 text-right mr-4">Số điện thoại:</label>
                <input class="w-2/3 px-3 py-2 border-2 border-cyan-500 rounded-md" type="text" name="phone" value="<?php echo $staff->Phone; ?>">
            </div>

            <div class="mb-4 flex items-center">
                <label for="email" class="w-1/3 text-right mr-4">Email:</label>
                <input class="w-2/3 px-3 py-2 border-2 border-cyan-500 rounded-md" type="text" name="email" value="<?php echo $staff->Email; ?>">
            </div>

            <div class="mb-4 flex items-start">
                <label for="address" class="w-1/3 text-right mr-4">Địa chỉ:</label>
                <textarea class="w-2/3 px-3 py-2 border-2 border-cyan-500 rounded-md resize-y" name="address"><?php echo $staff->Address; ?></textarea>
            </div>
            <div class="flex justify-end">
                <button type="submit" name="method" value="request_editing" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-auto">
                    Chỉnh sửa
                </button>
            </div>
        </form>
    </div>
</div>

<?php 
wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
// wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);
?>
