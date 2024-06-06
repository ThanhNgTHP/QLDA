<?php 
include realpath('../wp-content/QL_Du_An/enviroment_variables.php');
include_once getenv('DIR_CONTROLLERS').'\\backup.php';

$current_directory_url = content_url().'/QL_Du_An/views/admin/backup';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>
<div class="text-[50px]">
    Sao lưu phục hồi dữ liệu
</div>

<div>
    <div class="text-xl p-[50px_0_5px_0]">
        Nhập file database để phục hồi dữ liệu
    </div>
    <div class="text-xl" style="margin: auto;">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="relative" style="margin: auto;">
                <input name="pathfile" value="upfile" id="" class="" type="file" accept=".sql">   
            </div>
            <div class="pt-[5px]">
                <button type="submit" name="method" value="import" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Nhập
                </button>                
            </div>
        </form>
    </div>

    <div class="text-xl p-[50px_0_5px_0]">
        Xuất file database để sao lưu dữ liệu
    </div>
    <div class="text-xl" style="margin: auto;">
        <form method="post" action="">

            <button type="submit" name="method" value="export" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                Xuất
            </button>

            <?php if(isset($retval)): ?>
                <?php if($retval == 0): ?>
                    <a href="<?php echo home_url() . '/wp-content/QL_Du_An/resources/backup/qlduan.sql' ?>" download>
                        <img src="https://d1hjkbq40fs2x4.cloudfront.net/2016-01-31/files/1045-2.jpg" alt="W3Schools" width="104" height="142">
                    </a>

                    <div>Xuất file thành công</div>

                <?php else: ?>
                    <div>Xuất file thất bại</div>
                <?php endif; ?>

            <?php endif; ?>
            
            
        </form>
    </div>
</div>

<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>