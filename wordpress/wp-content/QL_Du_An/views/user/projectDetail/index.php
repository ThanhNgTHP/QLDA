<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\project_detail.php';

    $current_directory_url = content_url().'/QL_Du_An/views/user/projectDetail';
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
                    <?php echo $projectDetail->Project->Progress ?>%
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
                Danh sách thành viên
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
            <div>Tên HĐ: <?php if(isset($projectDetail->Contract->Name)) {echo $projectDetail->Contract->Name;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Số hợp đồng: <?php if(isset($projectDetail->Contract->Number)) {echo $projectDetail->Contract->Number;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Ngày kí: <?php if(isset($projectDetail->Contract->SignDay)) {echo $projectDetail->Contract->SignDay;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Ngày hết hạn: <?php if(isset($projectDetail->Contract->Expire)) {echo $projectDetail->Contract->Expire;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>ghi chú: <?php if(isset($projectDetail->Contract->Note)) {echo $projectDetail->Contract->Note;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Giá trị HD: <?php if(isset($projectDetail->Contract->Value)) {echo $projectDetail->Contract->Value;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Trạng thái: <?php if(isset($projectDetail->Contract->Status)) {echo $projectDetail->Contract->Status;} else { echo "Chưa có thông tin";} ?><br></div>
            </div>

            <div class="list-contract">
            <div class="text-[30px]">
                Ảnh hợp đồng
            </div>
            <?php ?>
            <?php if(isset($projectDetail->Contract->ID)):?>
                <a href="list-image-contract/?contractID=<?php echo $projectDetail->Contract->ID ?>">
                    <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Hiển Thị
                    </button>

                </a>
            <?php else:?>
                    <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Chưa có ảnh hợp đồng
                    </button>
            <?php endif ?>

            </div>
        </div>

        <div class="list-partner">
            <div class="text-[50px]">
                Thông Tin Đối Tác
            </div>
            <div class = "text-[20px]"> 
            <div>Tên ĐT: <?php if(isset($projectDetail->Partner->Name)) {echo $projectDetail->Partner->Name;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Người đại diện: <?php if(isset($projectDetail->Partner->Representative)) {echo $projectDetail->Partner->Representative;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Chức vụ: <?php if(isset($projectDetail->Partner->Position)) {echo $projectDetail->Partner->Position;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Email: <?php if(isset($projectDetail->Partner->Email)) {echo $projectDetail->Partner->Email;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>SĐT: <?php if(isset($projectDetail->Partner->Phone)) {echo $projectDetail->Partner->Phone;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Fax: <?php if(isset($projectDetail->Partner->Fax)) {echo $projectDetail->Partner->Fax;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Địa chỉ: <?php if(isset($projectDetail->Partner->Address)) {echo $projectDetail->Partner->Address;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Trạng thái: <?php if(isset($projectDetail->Partner->Status)) {echo $projectDetail->Partner->Status;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Ghi chú: <?php if(isset($projectDetail->Partner->Note)) {echo $projectDetail->Partner->Note;} else { echo "Chưa có thông tin";} ?><br></div>
            <div>Mã số thuế: <?php if(isset($projectDetail->Partner->TaxCode)) {echo $projectDetail->Partner->TaxCode;} else { echo "Chưa có thông tin";} ?><br></div>

            </div>
        </div>
    </div>
</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>