<?php 

include_once getenv('DIR_CONTROLLERS').'\\account.php';

$current_directory_url = content_url().'/QL_Du_An/views/account';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<br>
<br>
<br>
<br>
<button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Thêm
</button>
<?php foreach($accounts as $key => $account): ?>
    <div class="grid grid-cols-5 gap-1 
                p-[25px_0_0_0]
                m-[50px_0_0_0]
                border-t-solid
                border-t-2 
                border-t-indigo-600">
        <div class="text-xl" style="margin: auto;">
            <input type="text" name="name" value="<?php echo $account->Name; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <input type="text" name="password" value="<?php echo $account->Password; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <input type="text" name="status" value="<?php echo $account->Status; ?>">
        </div>

        <div class="text-xl" style="margin: auto;">
            <select name="" id="">
                <?php $permissionSelect = $account->GetAccountPermission();?>
                <option value="<?php echo $permissionSelect->ID ?>"><?php echo $permissionSelect->Name . '-' . $permissionSelect->ID; ?></option>
                <?php foreach(Permission::GetAllPermission() as $key => $permission): ?>
                    <?php if($permissionSelect->ID !== $permission->ID): ?>
                    <option  value="<?php echo $permission->ID ?>"><?php echo $permission->Name . '-' . $permission->ID; ?></option>
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