<?php 
include_once getenv('DIR_MODELS') . '/Staff.php';

$projectID = $_GET['projectID'] ?? null;
if(!isset($projectID)){
    // xử lý ngoại lệ
    exit;
}

$Staffs_ = GetStaffsWhereProjectID($projectID);

$groups = [[]];
for($i = 0; $i < count($Staffs_); $i++){
    $isGroup = false;
    $Staffs = $Staffs_;
    $staff = $Staffs[$i];

    for($j = 0; $j < count($groups); $j++){
        
        if(!isset($groups[$j]) || count($groups[$j]) === 0){
            break;
        }
        else{
            
            if($groups[$j][0]->TeamID === $staff->TeamID){
                $groups[$j][] = $staff;
                $isGroup = true;
                
                break;
            }
        }
    }

    if(!$isGroup){
        $groups[$j][] = $Staffs[$i];
    }
}
function GetStaffsWhereProjectID($ProjectID){
    // $Project = new Project();
    // $Project->ID = $projectID;
    // $Staffs = array_map(function($JoinStaff){
    //     $Staff = array_filter(Staff::GetAllStaff(), function($Staff) use ($JoinStaff){
    //         return $Staff->ID === $JoinStaff->StaffID;
    //     });

    //     return reset($Staff);

    // }, $Project->GetStaffJoinProject());

    // bổ sung cột ProjectID
    $Staffs = array_values(array_filter(Staff::GetAllStaff(), function($Staff) use ($ProjectID){
        return $Staff->ProjectID == $ProjectID;
    }));

    return $Staffs;
}
?>