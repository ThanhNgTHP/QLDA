<?php 
include_once getenv('DIR_CONTROLLERS') . '/list_job_user.php';

$current_directory = content_url() . '/QL_Du_An/views/listJobUser';
wp_enqueue_style('list_job_user_style', $current_directory . '/index.css');
?>

<div>

    <div class="text-[40px]">
        Danh Sách Công Việc
    </div>

    <?php 
    usort($jobs, function ($job1, $job2) {
        return $job1->ProjectID <=> $job2->ProjectID;
    });
    ?>

    <?php 
    $prevProjectID = null;
    ?>

    <?php foreach($jobs as $key => $job): ?>
        <?php 
        if ($job->ProjectID !== $prevProjectID) {
            if ($prevProjectID !== null) {
                echo '</div>';
            }
            echo '<div class="border-solid border-2 border-indigo-600 border-l-0 p-4 mb-4">';
            echo '<div class="text-2xl font-bold">Tên dự án: ' . GetNameProject($job->ProjectID) . '</div>';
            $prevProjectID = $job->ProjectID;
        }
        ?>

        <div class="p-[25px_0_0_0]
                    m-[0_0_50px_10px]
                    border-t-solid
                    border-t-2
                    border-t-indigo-600
                    grid grid-cols-2 gap-1">
            <div>
                <div class="font-bold">
                    Công việc <?php echo $key + 1; ?>: <?php echo $job->Name; ?>
                </div>
                <br>
                        <div>
                            Nội dung: <?php echo $job->Content; ?>
                        </div>
                        <br>
                        <div>
                            Ngày bắt đầu: <?php echo $job->Begin; ?>
                        </div>
                        <br>
                        <div>
                            Ngày kết thúc: <?php echo $job->End; ?>
                        </div>                    
                        <br>
                        <div>
                            Ngân sách dự kiến: <?php echo $job->TargetBudget; ?>
                        </div>
                        <br>
                        <div>
                            Ngân sách thực tế: <?php echo $job->ActualBudget; ?>
                        </div>
                        <br>
                    </div>

                    <div>
                        <div>
                            Tên nhóm: <?php echo GetNameTeam($job->TeamID); ?>
                        </div>
                        <br>
                        <div>
                            Mức độ ưu tiên: <?php echo $job->Priority; ?>
                        </div>
                        <br>
                        <div>
                            Ghi chú: <?php echo $job->Note; ?>
                        </div>
                        <br>
                        <div class="inline-block">Tiến độ:</div>
                        <div class="w-[90%] inline-block bg-gray-200 rounded-full dark:bg-gray-700">
                            <div class="w-[<?php echo $job->Progress; ?>%] bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full">
                                <?php echo $job->Progress; ?>%
                            </div>
                        </div>
                        <br>
            </div>
        </div>

    <?php endforeach; ?>
    
    <?php 
    // Đóng khung border cuối cùng nếu cần
    if ($prevProjectID !== null) {
        echo '</div>';
    }
    ?>

</div>

<?php 
wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
// wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);
?>
