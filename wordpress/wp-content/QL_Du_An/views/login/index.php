<?php
    include getcwd().'/wp-content/QL_Du_An/enviroment_variables.php';
    include getenv('DIR_CONTROLLERS').'/login.php';

    spl_autoload_register(function ($class_name) {
        include 'models/' . $class_name . '.php';
    });

    $current_directory_url = getenv('VIEWS_URL').'/login';
    $img_directory_url = getenv('RESOURCES_URL').'/layout_img';

    
    add_action( 'wp_enqueue_scripts', function() use ($current_directory_url){

        wp_enqueue_style( 'login_style', $current_directory_url.'/index.css', array(), time());

    });
?>  

<!-- <div class="loading">
    <div class="pie loading-pie-start" style="font-size: 40px;"></div>
</div> -->


<div class="login-container w-screen h-screen flex justify-center items-center">
    <form id="form-login" class="" action="<?php echo home_url(); ?>" method="post">
        <div class="login w-[100%] outline
                    p-[10px_20px_10px_20px] 
                    shadow-[50px_40px_20px_0px_rgba(0,0,0,0.5)]
                    bg-white rounded-md
                    ">
            <div class="text-center mt-[40px] mb-[40px] flex w-full h-full justify-center items-center">
                <img src="<?php echo $img_directory_url.'/logo.png'; ?>" alt="" width="150" >
            </div>

            <div class="text-center mt-[40px] mb-[40px]">
                <label for="username">Tài khoản</label>
                <input id="username" class="outline ml-[10px] p-[0_0_0_5px]" name="username" type="text">
            </div>

            <div class="text-center mt-[40px] mb-[40px]">
                <label for="password">Mật khẩu</label>
                <input id="password" class="outline ml-[15px] p-[0_0_0_5px]" name="password" type="password">
            </div>

            <div id="alert-login" class="hidden text-center mb-[20px] text-red-600">
                <label for="password">Tài khoản hoặc mật khẩu sai</label>
            </div>

            <div class="text-center">
                <button id="btn-login" 
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    value="login"
                    >Đăng Nhập</button>
            </div>
        </div>
    </form>
</div>

<?php 
    add_action( 'wp_enqueue_scripts', function() use ($current_directory_url){
        wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
        wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);
    });
    
?>  