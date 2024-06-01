<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\project_detail.php';

    $current_directory_url = content_url().'/QL_Du_An/views/projectDetail';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<div>
    <div class="text-[50px]">
        Thông Tin Dự Án
    </div>

    <div class = "text-[20px]"> 
        <?php echo "Tên dự án: ". $projectDetail->Project->Name ?><br>
        <?php echo "Loại dự án: ". $projectDetail->ProjectCategory->Name ?><br>
        <?php echo "Ngày bắt đầu: ". $projectDetail->Project->Begin ?><br>
        <?php echo"Ngày Kết thúc: ".  $projectDetail->Project->End ?><br>
        <?php echo "Liên hệ dự án: ". $projectDetail->Project->Contact ?><br>
        <?php echo "Mô tả: ". $projectDetail->Project->Description ?><br>
        <?php echo "Trạng thái: ". $projectDetail->Project->Status ?><br>

        <?php echo "Ngân sách dư kiến: ". $projectDetail->Project->TargetBudget ?><br>
        <?php echo "Ngân sách thực tế: ". $projectDetail->Project->ActualBudget ?><br>
        <div class="overflow-hidden text-ellipsis whitespace-nowrap">
            <div class="inline-block">Tiến độ:</div>
            <div class="w-[90%] inline-block bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="w-[<?php echo $projectDetail->Project->Progress ?>%] bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full">
                    <?php echo $projectDetail->Project->Progress ?>
                </div>
            </div>
        </div>

        <br>

        <div class="list-image">
            <div class="text-[30px]">
                Danh sách ảnh của dự án
            </div>

            <a href="list-image-project/?projectID=<?php echo $projectDetail->Project->ID ?>">
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Hiển Thị
                </button>
            </a>
            
        </div>

        <div class="list-staff">
            <div class="text-[30px]">
                Danh sách nhân viên
            </div>

            <a href="list-staff-project/?projectID=<?php echo $projectDetail->Project->ID ?>">
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Hiển Thị
                </button>
            </a>
            
        </div>

        <div class="list-job">
            <div class="text-[30px]">
                Danh sách công việc
            </div>

            <a href="list-job-project/?projectID=<?php echo $projectDetail->Project->ID ?>">
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Hiển Thị
                </button>
            </a>
            
        </div>


        <br>

        <div class="list-contract">
            <div class="text-[50px]">
                Thông Tin Hợp đồng
            </div>
            <div class = "text-[20px]"> 
            <?php echo "Tên HĐ: ". $projectDetail->Contract->Name ?><br>
            <?php echo "Số hD: ". $projectDetail->Contract->Number ?><br>
            <?php echo "Ngày kí: ". $projectDetail->Contract->SignDay ?><br>
            <?php echo "Ngày hết hạn: ". $projectDetail->Contract->Expire ?><br>
            <?php echo "ghi chú: ". $projectDetail->Contract->Note ?><br>
            <?php echo "Giá trị HD: ". $projectDetail->Contract->Value ?><br>
            <?php echo "Trạng thái: ". $projectDetail->Contract->Status ?><br>
            </div>

            <div class="list-contract">
            <div class="text-[30px]">
                Ảnh hợp đồng
            </div>

            <a href="list-image-contract/?contractID=<?php echo $projectDetail->Contract->ID ?>">

                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Hiển Thị
                </button>

            </a>

            </div>
        </div>

        <div class="list-partner">
            <div class="text-[50px]">
                Thông Tin Đối Tác
            </div>
            <div class = "text-[20px]"> 
            <?php echo "Tên ĐT: ". $projectDetail->Partner->Name ?><br>
            <?php echo "Người đại diện: ". $projectDetail->Partner->Representative ?><br>
            <?php echo "Chức vụ: ". $projectDetail->Partner->Position ?><br>
            <?php echo "Email: ". $projectDetail->Partner->Email ?><br>
            <?php echo "SĐT: ". $projectDetail->Partner->Phone ?><br>
            <?php echo "Fax: ". $projectDetail->Partner->Fax ?><br>
            <?php echo "Địa chỉ: ". $projectDetail->Partner->Address ?><br>
            <?php echo "Trạng thái: ". $projectDetail->Partner->Status ?><br>
            <?php echo "Ghi chú: ". $projectDetail->Partner->Note ?><br>
            <?php echo "Mã số thuế: ". $projectDetail->Partner->TaxCode ?><br>
            </div>
        </div>
    </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>