<?php 

include_once getenv('DIR_CONTROLLERS').'\\job.php';

$current_directory_url = content_url().'/QL_Du_An/views/job';

wp_enqueue_style( 'job_style', $current_directory_url.'/index.css' );

?>

<form action="" method="post">
    <input id="input-find" class="outline ml-[10px] p-[0_0_0_5px]" name="jobName" type="text" placeholder="Tìm Kiếm">
    <button id="btn-find" 
            name="method"
            value="find"
            type="submit"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
    >Tìm kiếm</button>
</form>

<div class="overflow-auto">

    <div class="text-xl grid grid-cols-[repeat(13,_minmax(0,_1fr))] gap-1 
                    w-[400%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600" >
                    <div style="margin: auto;">Tên công việc</div>
                    <div style="margin: auto;">Nội dung</div>
                    <div style="margin: auto;">Ngày bắt đầu</div>
                    <div style="margin: auto;">Ngày kết thúc</div>
                    <div style="margin: auto;">Ngân sách dự kiến</div>
                    <div style="margin: auto;">Ngân sách thực tế</div>
                    <div style="margin: auto;">Dộ ưu tiên</div>
                    <div style="margin: auto;">Tiến độ</div>
                    <div style="margin: auto;">Tên thành viên</div>
                    <div style="margin: auto;">Tên nhóm</div>
                    <div style="margin: auto;">Tên dự án</div>
                    <div style="margin: auto;">Ghi chú</div>
                    <div style="margin: auto;">Công cụ</div>
    </div>

    <form action="" method="post">
        <div class="grid grid-cols-[repeat(13,_minmax(0,_1fr))] gap-1 
                    w-[400%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="content" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="begin" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="end" value="">
                </div>
                
                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="targetBudget" value="" step="any">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="actualBudget" value="" step="any">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="priority" value="">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="progress" value="" min="0" max="100">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="staffID" id="">
                        <?php foreach(Staff::GetAllStaff() as $key => $staff): ?>
                            <option value="<?php echo $staff->ID; ?>"><?php echo $staff->Name; ?> - <?php echo $staff->ID; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="teamID" id="">
                        <?php foreach(Team::GetAllTeam() as $key => $team): ?>
                            <option value="<?php echo $team->ID; ?>"><?php echo $team->Name; ?> - <?php echo $team->ID; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="text-xl" style="margin: auto;">
                    <select name="projectID" id="">
                        <?php foreach(Project::GetAllProject() as $key => $project): ?>
                            <option value="<?php echo $project->ID; ?>"><?php echo $project->Name; ?> - <?php echo $project->ID; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                
                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="">
                </div>
                
                <div style="margin: auto;">
                    <button type="submit" name="method" value="add" class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Thêm
                    </button>
                </div>
        </div>

    </form>
    
    <?php $jobs = array_reverse($jobs);?>
    <?php foreach($jobs as $key => $job): ?>
        <form action="" method="post">
            <div class="grid grid-cols-[repeat(13,_minmax(0,_1fr))] gap-1 
                        w-[400%]
                        p-[25px_0_0_0]
                        m-[50px_0_0_0]
                        border-t-solid
                        border-t-2 
                        border-t-indigo-600">

                <div class="text-xl hidden" style="margin: auto;">
                    <input type="text" name="id" value="<?php echo $job->ID; ?>">
                </div>                        

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="name" value="<?php echo $job->Name; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="content" value="<?php echo $job->Content; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="begin" value="<?php echo $job->Begin; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="date" name="end" value="<?php echo $job->End; ?>">
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="targetBudget" value="<?php echo $job->TargetBudget; ?>" step="any">
                </div>
                
                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="actualBudget" value="<?php echo $job->ActualBudget; ?>" step="any">
                </div>
                
                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="priority" value="<?php echo $job->Priority; ?>">
                </div>
                
                <div class="text-xl" style="margin: auto;">
                    <input type="number" name="progress" value="<?php echo $job->Progress; ?>" min="0" max="100">
                </div>                    

                <div class="text-xl" style="margin: auto;">
                    <select name="staffID" id="">
                        <?php $staffSelect = $job->GetStaffJob();?>
                        <option value="<?php echo $staffSelect->ID ?>"><?php echo $staffSelect->Name . '-' . $staffSelect->ID; ?></option>
                        <?php foreach(Staff::GetAllStaff() as $key => $staff): ?>
                            <?php if($staffSelect->ID !== $staff->ID): ?>
                            <option  value="<?php echo $staff->ID ?>"><?php echo $staff->Name . '-' . $staff->ID; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="teamID" id="">
                        <?php $teamSelect = $job->GetTeam();?>
                        <option value="<?php echo $teamSelect->ID ?>"><?php echo $teamSelect->Name . '-' . $teamSelect->ID; ?></option>
                        <?php foreach(Team::GetAllTeam() as $key => $team): ?>
                            <?php if($teamSelect->ID !== $team->ID): ?>
                            <option  value="<?php echo $team->ID ?>"><?php echo $team->Name . '-' . $team->ID; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <select name="projectID" id="">
                        <?php $projectSelect = $job->GetJobProject();?>
                        <option value="<?php echo $projectSelect->ID ?>"><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                        <?php foreach(Project::GetAllProject() as $key => $project): ?>
                            <?php if($projectSelect->ID !== $project->ID): ?>
                            <option  value="<?php echo $project->ID ?>"><?php echo $project->Name . '-' . $project->ID; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="text-xl" style="margin: auto;">
                    <input type="text" name="note" value="<?php echo $job->Note; ?>">
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
wp_enqueue_script( 'job_script', $current_directory_url.'/index.js', array(), time(), true);

?>