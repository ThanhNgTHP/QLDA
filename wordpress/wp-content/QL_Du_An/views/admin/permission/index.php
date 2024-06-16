<?php 

include_once getenv('DIR_CONTROLLERS').'\\permission.php';

$current_directory_url = content_url().'/QL_Du_An/views/permission';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<br>
<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="permissionName" type="text" placeholder="Tìm Kiếm">
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
    <div class="text-xl grid grid-cols-3 gap-1 
                    w-[100%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600" >
                    <div style="margin: auto;">Tên quyền</div>
                    <div style="margin: auto;">Ghi chú</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-3 gap-1 
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
                    <input type="text" name="note" value="">
                </div>

                <div style="margin: auto;">
                    <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Thêm
                    </button>
                </div>
        </div>

    </form>
    
    <?php $permissions = array_reverse($permissions);?>
    <?php foreach($permissions as $key => $permission): ?>
        <form action="" method="post">
            <div class="grid grid-cols-3 gap-1 
                                p-[25px_0_0_0]
                                m-[50px_0_0_0]
                                border-t-solid
                                border-t-2 
                                border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $permission->ID; ?>">
                </div>          

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $permission->Name ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="<?php echo $permission->Note ?>">
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