<?php 

include_once getenv('DIR_CONTROLLERS').'\\event.php';

$current_directory_url = content_url().'/QL_Du_An/views/event';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="eventName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>

<div class="overflow-auto">
    <br>
    <br>
    <div class="text-xl grid grid-cols-6 gap-1 
                    w-[150%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600" >
                    <div style="margin: auto;">Ảnh</div>
                    <div style="margin: auto;">Tên sự kiện</div>
                    <div style="margin: auto;">Nội dung</div>
                    <div style="margin: auto;">Ghi chú</div>
                    <div style="margin: auto;">Tên dự án</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-6 gap-1 
                    w-[150%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
                <div class="text-xl" style="margin: auto;">
                    <input type="file" name="image" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="content" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="">
                </div>                

                <div class="text-xl" style="margin: auto;">
                    <select name="projectID" id="">
                        <?php foreach(Project::GetAllProject() as $key => $project): ?>
                            <option value="<?php echo $project->ID; ?>"><?php echo $project->Name; ?> - <?php echo $project->ID; ?></option>
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

    <?php foreach($events as $key => $events): ?>
        <form action="" method="post">
            <div class="grid grid-cols-6 gap-1 
                        w-[150%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $events->ID; ?>">
                </div>

                <div style="margin: auto;">
                    <img class="inline w-[300px] h-auto" src="<?php echo $events->Image ?>" alt="Avatar"> 
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $events->Name; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="content" value="<?php echo $events->Content; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="<?php echo $events->Note; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="projectID" id="">
                        <?php $projectSelect = $events->GetProject();?>
                        <option value="<?php echo $projectSelect->ID ?>"><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                        <?php foreach(Project::GetAllProject() as $key => $project): ?>
                            <?php if($projectSelect->ID !== $project->ID): ?>
                            <option  value="<?php echo $project->ID ?>"><?php echo $project->Name . '-' . $project->ID; ?></option>
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