<?php 

include_once getenv('DIR_CONTROLLERS').'\\contract.php';

$current_directory_url = content_url().'/QL_Du_An/views/contract';

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
    <?php foreach($contracts as $key => $contract): ?>
        <div class="grid grid-cols-10 gap-1
                    w-[250%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">
            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="<?php echo $contract->Name; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="number" value="<?php echo $contract->Number; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="sign-day" value="<?php echo $contract->SignDay; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="expire" value="<?php echo $contract->Expire; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="note" value="<?php echo $contract->Note; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="value" value="<?php echo $contract->Value; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="status" value="<?php echo $contract->Status; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="partner-id" id="">
                    <?php $partnerSelect = $contract->GetContractPartner(); ?>
                    <option value="<?php echo $partnerSelect->ID ?>"><?php echo $partnerSelect->Name . '-' . $partnerSelect->ID; ?></option>
                    <?php foreach(Partner::GetAllPartner() as $key => $partner): ?>
                        <?php if($partnerSelect->ID !== $partner->ID): ?>
                        <option value="<?php echo $partner->ID ?>"><?php echo $partner->Name . '-' . $partner->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="project-id" id="">
                    <?php $projectSelect = $contract->GetContractProject(); ?>
                    <option value="<?php echo $projectSelect->ID ?>"><?php echo $projectSelect->Name . '-' . $projectSelect->ID; ?></option>
                    <?php foreach(Project::GetAllProject() as $key => $project): ?>
                        <?php if($projectSelect->ID !== $project->ID): ?>
                        <option value="<?php $project->ID ?>"><?php echo $project->Name . '-' . $project->ID; ?></option>
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