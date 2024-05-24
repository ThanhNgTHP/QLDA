<?php 

include_once getenv('DIR_CONTROLLERS').'\\staff.php';
$current_directory_url = content_url().'/QL_Du_An/views/staff';

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
    <?php foreach($staffs as $key => $staff): ?>
        <div class="grid grid-cols-[repeat(12,_minmax(0,_1fr))] gap-1
                    w-[300%]
                    p-[25px_0_0_0]
                    m-[50px_0_0_0]
                    border-t-solid
                    border-t-2 
                    border-t-indigo-600">

            <div>
                <img class="inline w-[300px]" src="<?php echo $staff->Avatar ?>" alt="Avatar"> 
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="name" value="<?php echo $staff->Name; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="gender" value="<?php echo $staff->Gender; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="birthday" value="<?php echo $staff->BirthDay; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="phone" value="<?php echo $staff->Phone; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="email" value="<?php echo $staff->Email; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="address" value="<?php echo $staff->Address; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="position" value="<?php echo $staff->Position; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
                <input type="text" name="status" value="<?php echo $staff->Status; ?>">
            </div>

            <div class="text-xl" style="margin: auto;">
            <?php $teamSelect = $staff->GetStaffTeam(); ?>
                <select name="team-id" id="">
                    <option value="<?php echo $teamSelect->ID ?>"><?php echo $teamSelect->Name . '-' . $teamSelect->ID; ?></option>
                    <?php foreach(Team::GetAllTeam() as $key => $team): ?>
                        <?php if($teamSelect->ID !== $team->ID): ?>
                        <option value="<?php echo $team->ID ?>"><?php echo $team->Name . '-' . $team->ID; ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="text-xl" style="margin: auto;">
                <select name="account-id" id="">
                    <?php $accountSelect = $staff->GetStaffAccount(); ?>
                    <option value="<?php $accountSelect->ID; ?>"><?php echo $accountSelect->Name . '-' . $accountSelect->ID; ?></option>
                    <?php foreach(Account::GetAllAccount() as $key => $account): ?>
                        <?php if($accountSelect->ID !== $account->ID): ?>
                        <option value="<?php $account->ID; ?>"><?php echo $account->Name . '-' . $account->ID; ?></option>
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