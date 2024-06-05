<?php 

include_once getenv('DIR_CONTROLLERS').'\\partner.php';

$current_directory_url = content_url().'/QL_Du_An/views/partner';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<div class="overflow-auto">
    <br>
    <br>
    <br>
    <br>
    <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Thêm
    </button>
    <?php foreach($partners as $key => $partner): ?>
        <div class="grid grid-cols-11 gap-1 
                    w-[300%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
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
                <input type="text" name="tax-code" value="<?php echo $partner->TaxCode; ?>">
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
</div>
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>