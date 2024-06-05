<?php 

include_once getenv('DIR_CONTROLLERS').'\\partner.php';

$current_directory_url = content_url().'/QL_Du_An/views/partner';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="partnerName" type="text" placeholder="Tìm Kiếm">
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
                    <div style="margin: auto;">Tên đối tác</div>
                    <div style="margin: auto;">Người đại diện</div>
                    <div style="margin: auto;">Chức vụ</div>
                    <div style="margin: auto;">Email</div>
                    <div style="margin: auto;">Số điện thoại</div>
                    <div style="margin: auto;">Fax</div>
                    <div style="margin: auto;">Địa chỉ</div>
                    <div style="margin: auto;">Trạng thái</div>
                    <div style="margin: auto;">Ghi chú</div>
                    <div style="margin: auto;">Taxcode</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-11 gap-1 
                    w-[300%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="representative" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="position" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="email" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="phone" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="fax" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="address" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="status" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="note" value="">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="taxCode" value="">
            </div>           

            <div style="margin: auto;">
                <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Thêm
                </button>
            </div>
        </div>

    </form>

    <?php foreach($partners as $key => $partner): ?>
        <form action="" method="post">
            <div class="grid grid-cols-11 gap-1 
                        w-[300%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $partner->ID; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $partner->Name; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="representative" value="<?php echo $partner->Representative; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="position" value="<?php echo $partner->Position; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="email" value="<?php echo $partner->Email; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="phone" value="<?php echo $partner->Phone; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="fax" value="<?php echo $partner->Fax; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="address" value="<?php echo $partner->Address; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="status" value="<?php echo $partner->Status; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="<?php echo $partner->Note; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="taxCode" value="<?php echo $partner->TaxCode; ?>">
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