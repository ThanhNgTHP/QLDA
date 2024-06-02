<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\list_job_project.php';

    $current_directory_url = content_url().'/QL_Du_An/views/listJobProject';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'list_job_project_style', $current_directory_url.'/index.css' );

?>

<div class="text-[50px]">
    Danh Sách Công Việc
</div>

<div>

<!-- <?php print_r($jobs);?> -->
<?php $count = 0;?>

<?php foreach($jobs as $key => $job): ?>
    <?php $count++;?>
    <div class="text-[30px]">
            <?php echo $count.". ". $job->Name; ?><br>
    </div>
    <div class="p-[5px_0_0_0]
                m-[20px_0_50px_0]
                border-t-solid
                border-t-2 
                border-t-indigo-600" style="margin: 0px 0 50px 0">

        <div class="job">
            <?php echo "Ngày bắt đầu: ". $job->Begin; ?><br>
            <?php echo "Ngày kết thúc: ". $job->End; ?><br>
            <?php echo "Nội dung: ". $job->Content; ?><br>
            <?php echo "Ghi chú: ". $job->Note; ?><br>
            <?php echo "Ngân sách dự kiến: ". $job->TargetBudget; ?><br>
            <?php echo "Ngân sách thực tế: ". $job->ActualBudget; ?><br>
            <?php echo "Độ ưu tiên: ". $job->Priority; ?><br>

            <div class="inline-block">Tiến độ:</div>
            <div class="w-[90%] inline-block bg-gray-200 rounded-full dark:bg-gray-700">
                <div class="w-[<?php echo $job->Progress ?>%] bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full">
                    <?php echo $job->Progress ?>%
                </div>
            </div>
        </div>
        <br>
        <div class="text-[25px]">
            *Bộ phận phụ trách công việc:
        </div>        

        <div class="department">
            <?php echo "Tên phòng ban:" . $departments[$count - 1]->Name ?><br>
        </div>


        <div class="team">
            <?php echo "Tên nhóm: " . $teams[$count - 1]->Name ?><br>
        </div>

        <div class="staff">
            <!-- <?php $staff = GetStaff($job); ?> -->
            <?php echo "Tên thành viên: " . $staff->Name . " - " . "Mã thành viên: " . $staff->ID ?><br>

        </div>
    </div>

<?php endforeach ?>

</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>