<?php 
    include getcwd().'/wp-content/QL_Du_An/enviroment_variables.php';
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\home.php';

    // https://www.inithtml.com/html-css/tao-hieu-ung-cho-tai-trang-preload/

    $current_directory_url = content_url().'/QL_Du_An/views/home';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

    if(GET_FindProjectsSummaryWhereName()){
        $projectSummaryAll = GET_FindProjectsSummaryWhereName();
    }
?>


<div class="p-[0_0_50px_0]">
    <div class="mt-[40px] mb-[40px]">
        <div class="text-right pr-[10px]">
            <form action="" method="get">
                <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="project-summary-name" type="text" placeholder="Tìm Kiếm">
                <button id="btn-find" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >Tìm</button>
            </form>
        </div>
    </div>

    <div class="projects-info">
        <?php foreach($projectSummaryAll as $key => $projectSummary): ?>
                <div class="grid grid-cols-4 gap-1 
                            p-[25px_0_0_10px]
                            m-[50px_0_0_0]
                            border-t-solid
                            border-t-2 
                            border-t-indigo-600">
                    <div class="img flex justify-center items-center">
                        <img src="<?php if(isset($projectSummary->Image)){ echo $projectSummary->Image;} else { echo "https://png.pngtree.com/png-vector/20190420/ourmid/pngtree-question-mark-vector-icon-png-image_963976.jpg";} ?>" 
                        alt="<?php echo $projectSummary->Image; ?>"
                        width="500"
                        >
                    </div>

                    <div class="description-project col-span-3 pl-[10px] pr-[10px]">
                        <div class="font-bold h-[2.5rem] text-2xl overflow-hidden text-ellipsis	whitespace-nowrap">
                            <?php echo $projectSummary->ProjectName; ?>
                        </div>

                        <div class="overflow-hidden text-ellipsis whitespace-nowrap">
                            <div class="inline-block">Tiến độ:</div>
                            <div class="w-[90%] inline-block bg-gray-200 rounded-full dark:bg-gray-700">
                                <div class="w-[<?php echo $projectSummary->ProjectProgress; ?>%] bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full">
                                    <?php echo $projectSummary->ProjectProgress; ?>%
                                </div>
                            </div>
                        </div>

                        <div class="overflow-hidden text-ellipsis whitespace-nowrap">
                            Số người: <?php echo $projectSummary->StaffCount; ?>
                        </div>

                        <div class="overflow-hidden text-ellipsis whitespace-nowrap">
                            Số hơp đồng: <?php if(isset($projectSummary->ContractNumber)){echo $projectSummary->ContractNumber;} else{ echo "chưa có thông tin";} ?> 
                            
                        </div>

                        <div class="overflow-hidden text-ellipsis whitespace-nowrap">
                            Đối tác: <?php if(isset($projectSummary->PartnerName)){echo $projectSummary->PartnerName;;} else{ echo "chưa có thông tin";}  ?>
                        </div>

                        <div class="overflow-hidden text-ellipsis whitespace-nowrap">
                            Mô tả: <?php echo $projectSummary->Description; ?>
                        </div>
                    </div>

                    <div class="mr-[0] ml-[auto] col-span-4">

                    <a class="pr-[10px]" href="http://localhost/wordpress/project-detail/?projectID=<?php echo $projectSummary->ProjectID ?>">
                        <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                Đọc Thêm
                        </button>
                    </a>    

                    </div>
                </div>
        <?php endforeach; ?>
    </div>
</div>

<?php
    function GET_FindProjectsSummaryWhereName(){
        $findProjectSummaryName = $_GET['project-summary-name'] ?? null;
        if(isset($findProjectSummaryName)){
            $findProjectsSummary = ProjectSummary::FindProjectsSummaryWhereName($findProjectSummaryName);
        }

        return $findProjectsSummary ?? null;
    }
?>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
    wp_enqueue_script( 'home_script', $current_directory_url.'/index.js', array(), time(), true);
?>