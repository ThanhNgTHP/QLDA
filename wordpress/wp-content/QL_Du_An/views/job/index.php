<?php 

include_once getenv('DIR_CONTROLLERS').'\\job.php';

$current_directory_url = content_url().'/QL_Du_An/views/job';

wp_enqueue_style( 'login_style', $current_directory_url.'/index.css' );

?>

<div class="overflow-auto">
    <br>
    <br>
    <br>
    <br>
    <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Thêm
    </button>
    <?php foreach($jobs as $key => $job): ?>
        <div class="grid grid-cols-8 gap-1 
                    w-[200%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="<?php echo $job->Name; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="content" value="<?php echo $job->Content; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="note" value="<?php echo $job->Note; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="begin" value="<?php echo $job->Begin; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="end" value="<?php echo $job->End; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="team-id" id="">
                    <?php $teamSelect = $job->JobTeam(); ?>
                    <option value="<?php echo $teamSelect->ID; ?>"><?php echo $teamSelect->Name . '-' . $teamSelect->ID; ?></option>
                    <?php foreach(Team::GetAllTeam() as $key => $team): ?>
                        <?php if($team): ?>
                        <option value="<?php $team->ID; ?>"><?php echo $team->Name . '-' . $team->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="" id="">
                    <?php $projectSelect = $job->JobProject(); ?>
                    <option value=""><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                    <?php foreach(Project::GetAllProject() as $key => $project): ?>
                        <?php if($projectSelect->ID !== $project->ID): ?>
                        <option value=""><?php echo $project->Name . '-' . $project->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div style="margin: auto;">
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Sửa
                </button>
                <button class="text-2xl bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                    Xóa
                </button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
    
<?php

wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
wp_enqueue_script( 'login_script', $current_directory_url.'/index.js', array(), time(), true);

?>