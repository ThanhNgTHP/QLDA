<?php 
    // spl_autoload_register(function ($class_name) {
    //     include 'models/' . $class_name . '.php';
    // });

    include_once getenv('DIR_MODELS') . '/Event.php';

    $current_directory = content_url().'/QL_Du_An/views/event';
	wp_enqueue_style( 'listevent_style', $current_directory.'/index.css' );
?>

<div>
    <?php
    $Event = new Event();
    $Events = $Event->GetAllEvent();
    ?>

    <?php foreach($Events as $key => $event):?>
        <div class ="p-[25px_0_0_0]
                    m-[0_0_50px_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">

            <div class="text-[25px]">
                <?php echo $event->Name; ?>
            </div>

        <div class="grid grid-cols-4 gap-1">

            <div class="img flex justify-center items-center col-span-1 p-[0_0_10px_0]">
                <img src="<?php echo $event->Image; ?>" 
                alt=""
                width="300"
                >
            </div>

            <div class="line-clamp-4 overflow-hidden whitespace-normal overflow-ellipsis text-left col-span-3
                        p-[0_0_0_10px]
                        m-[0_0_0_0]
                        border-l-solid
                        border-l-2 
                        border-l-indigo-600           
            ">
                <?php echo $event->Content; ?>
            </div>

            <div class="mr-[0] ml-[auto] col-span-4">

                <!-- <a href="http://localhost/wordpress/project-detail/?projectID=<?php echo $projectSummary->ProjectID ?>"> -->
                <a href="http://localhost/wordpress/event-detail/?eventID=<?php echo $event->ID ?>">
                    <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                            Đọc Thêm
                    </button>
                </a>    

            </div>
            
        </div>

        </div>        
    <?php endforeach ?>

</div>
<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>