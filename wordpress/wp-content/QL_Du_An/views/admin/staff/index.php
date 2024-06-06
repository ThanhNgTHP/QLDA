<?php 

include_once getenv('DIR_CONTROLLERS').'\\staff.php';
$current_directory_url = content_url().'/QL_Du_An/views/admin/staff';

wp_enqueue_style( 'staff_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="staffName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>

<div class="overflow-auto">

    <div class="text-xl grid grid-cols-11 gap-1 
                        w-[300%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600" >
                        <div style="margin: auto;">Ảnh</div>
                        <div style="margin: auto;">Tên thành viên</div>
                        <div style="margin: auto;">Giới tính</div>
                        <div style="margin: auto;">Ngày sinh</div>
                        <div style="margin: auto;">Số điện thoại</div>
                        <div style="margin: auto;">Email</div>
                        <div style="margin: auto;">Địa chỉ</div>
                        <div style="margin: auto;">Chức vụ</div>
                        <div style="margin: auto;">Trạng thái</div>
                        <div style="margin: auto;">Tài khoản</div>
                        <div style="margin: auto;">Công cụ</div>
        </div>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="grid grid-cols-11 gap-1 
                        w-[300%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="relative" style="margin: auto;">
                    <input name="avatar" id="imageInput--1" class="imageInput hidden" type="file" accept="image/jpeg, image/png, image/gif">
                    <img class="displayImage--1 inline" width="250" src="https://cdn.discordapp.com/attachments/1242044806960779315/1247976047107117086/126477-removebg-preview.png?ex=6661fbc3&is=6660aa43&hm=41f3114743d10745256ccf064eac1433c1c803707fa63f2f48f83400ada6c201&" alt="Ảnh"> 
                    
                    <div class="absolute top-0 left-0 bottom-0 right-0 text-center" style="">
                        <label for="imageInput--1">
                            <div class="w-[250px] h-full hover:bg-white hover:opacity-50">
                                
                            </div>
                        </label>
                    </div>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="gender" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="birthday" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="phone" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="email" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="address" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="position" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="status" value="">
                </div>


                <div class="text-xl" style="margin: auto;">
                    <select name="accountID" id="">
                        <?php foreach(Account::GetAllAccount() as $key => $account): ?>
                            <option value="<?php echo $account->ID; ?>"><?php echo $account->Name; ?> - <?php echo $account->ID; ?></option>
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

    <?php foreach($staffs as $key => $staff): ?>
        <form action="" method="post" enctype="multipart/form-data">

            <div class="grid grid-cols-11 gap-1 
                        w-[300%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $staff->ID; ?>">
                </div>                                

                <div class="relative" style="margin: auto;">
                    <input name="avatar" id="imageInput-<?php echo $key; ?>" class="imageInput hidden" type="file" accept="image/jpeg, image/png, image/gif">
                    <img class="displayImage-<?php echo $key; ?> inline w-[350px]" src="<?php echo $staff->Avatar ?>" alt="Avatar"> 

                    <div class="absolute top-0 left-0 bottom-0 right-0">
                        <label for="imageInput-<?php echo $key; ?>">
                            <div class="w-[350px] h-full hover:bg-white hover:opacity-50">
                            
                            </div>
                        </label>
                    </div>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $staff->Name; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="gender" value="<?php echo $staff->Gender; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="birthday" value="<?php echo $staff->BirthDay; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="phone" value="<?php echo $staff->Phone; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="email" value="<?php echo $staff->Email; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="address" value="<?php echo $staff->Address; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="position" value="<?php echo $staff->Position; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="status" value="<?php echo $staff->Status; ?>">
                </div>
                
                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="avatar" value="<?php echo $staff->Avatar; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="accountID" id="">
                        <?php $accountSelect = $staff->GetStaffAccount();?>
                        <option value="<?php echo $accountSelect->ID ?>"><?php echo $accountSelect->Name . '-' . $accountSelect->ID; ?></option>
                        <?php foreach(Account::GetAllAccount() as $key => $account): ?>
                            <?php if($accountSelect->ID !== $account->ID): ?>
                            <option  value="<?php echo $account->ID ?>"><?php echo $account->Name . '-' . $account->ID; ?></option>
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
wp_enqueue_script( 'staff_script', $current_directory_url.'/index.js', array(), time(), true);

?>