<?php 
include_once getenv('DIR_MODELS') . '/Staff.php';
include_once getenv('DIR_DB') . '/ActionDB.php';
include 'base_controllers.php';


$projectID = $_GET['projectID'] ?? null;
if(!isset($projectID)){
    // xử lý ngoại lệ
    exit;
}

$Staffs_ = GetStaffsWhereProjectID($projectID);
// print_r($Staffs_);
// exit;

// $groups = [[]];
$groups = $Staffs_;



for($i = 0; $i < count($Staffs_); $i++){
    $isGroup = false;
    $Staffs = $Staffs_;
    $staff = $Staffs[$i];



    for($j = 0; $j < count($groups); $j++){
        
        if(!isset($groups[$j]) || count($groups) === 0){
            break;
        }
        else{
            // print_r($groups[$j]['StaffID']);
            // exit;
            
            if(GetTeam($groups[$j]['StaffID']) === GetTeam($staff['StaffID'])){
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

function GetTeam($staffID){
    [$Staff] = array_values(array_filter(Staff::GetAllStaff(), function ($staff) use ($staffID){
        return $staff->ID == $staffID;
    }));
    $teamID = $Staff->TeamID;
    [$Team] = array_values(array_filter(Team::GetAllTeam(), function ($team) use ($teamID){
        return $team->ID == $teamID;
    }));
    return $Team->ID;
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
    // $Staffs = array_values(array_filter(Staff::GetAllStaff(), function($Staff) use ($ProjectID){
    //     return $Staff->ProjectID == $ProjectID;
    // }));

    $action = new ActionDB();
    $jobs = $action->GetStaffJoinProject($ProjectID);
    $rows = $jobs->fetch_all(MYSQLI_ASSOC);
    // print_r($rows);exit;

    // var_dump($rows);
    // exit;

    return $rows;
}
?>