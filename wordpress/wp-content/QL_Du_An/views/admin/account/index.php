<?php 

include_once getenv('DIR_CONTROLLERS').'\\account.php';

$current_directory_url = content_url().'/QL_Du_An/views/admin/account';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<br>
<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="accountName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>
<br>

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
                    <div style="margin: auto;">Tên tài khoản</div>
                    <div style="margin: auto;">Mật khẩu</div>
                    <div style="margin: auto;">Trạng thái</div>
                    <div style="margin: auto;">Quyền</div>
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
                    <input type="text" name="password" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="status" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="permissionID" id="">
                        <?php foreach(Permission::GetAllPermission() as $key => $permission): ?>
                            <option value="<?php echo $permission->ID; ?>"><?php echo $permission->Name; ?> - <?php echo $permission->ID; ?></option>
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
    
    <?php $accounts = array_reverse($accounts);?>
    <?php foreach($accounts as $key => $account): ?>
        <form action="" method="post">
            <div class="grid grid-cols-5 gap-1 
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">
                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $account->ID; ?>">
                </div>
                        
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
                    <select name="permissionID" id="">
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