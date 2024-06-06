<?php 
    include getcwd().'\\wp-content\\QL_Du_An\\controllers\\list_team.php';

    $current_directory_url = content_url().'/QL_Du_An/views/user/listTeam';
    $img_directory_url = content_url().'/QL_Du_An/resources/layout_img';

	wp_enqueue_style( 'list_team_style', $current_directory_url.'/index.css' );

?>

<div class="text-[50px]">
    Danh Sách nhóm
</div>

<div>
    <?php foreach($Teams as $key => $team):?>
        <div class ="p-[25px_10px_0_10px]
                    m-[10px_10px_10px_10px]
                    border-solid
                    border-2 
                    border-indigo-600
                    border-l-0
                    border-b-0
                    ">
        <div class="grid grid-cols-3 gap-1">            
            <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                Tên nhóm: <?php echo $team->Name; ?>
            </div>             

            <div class="overflow-hidden whitespace-normal overflow-ellipsis text-left
                            p-[0_0_0_5px]
                            m-[0_0_0_0]
                            border-l-solid
                            border-l-2 
                            border-l-indigo-600           
                ">
                <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                    Trưởng nhóm: <?php echo $team->Leader; ?>
                </div>      
                
                <div class="m-[0_0_0_5px] overflow-y-hidden text-justify">
                    Phòng ban: <?php echo $team->GetTeamDepartment()->Name; ?>
                </div>      
            </div>
            
        </div>

        </div>        
    <?php endforeach ?>

</div>

<?php 
    wp_enqueue_script('tailwind_script', 'https://cdn.tailwindcss.com', array(), time(), true);
?>