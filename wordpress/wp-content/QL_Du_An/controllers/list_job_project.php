<?php 
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Job.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    include_once getenv('DIR_MODELS') . '/Team.php';

    include 'base_controllers.php';



    $projectID = $_GET['projectID'] ?? null;
    if(!isset($projectID)){
        // xử lý ngoại lệ
        exit;
    }

    $jobs = GetJobProject($projectID);
    $teams = [];
    $departments = [];

    foreach($jobs as $key => $job){
        $team = GetTeam($job);
        $teams[] = $team;

        $department = GetDepartment($team);
        $departments[] = $department;
    }

    function ContaintArray($array_contain, $object){
        foreach($array_contain as $key => $contain){
            if($contain->ID == $object->ID){
                return true;
            }
        }

        return false;
    }

    function GetJobProject($projectID){
        return Job::GetJobsByProjectID($projectID);
    }

    function GetTeam($job){
        return $job->GetTeam();
    }

    function GetDepartment($team)
    {
        return $team->GetTeamDepartment();
    }


    function GetStaff($job){
        $StaffID = $job->StaffID;
        [$staff] = array_values(array_filter(Staff::GetAllStaff(), function ($staff) use ($StaffID){
            return $staff->ID == $StaffID;
        }));

        return $staff;
    }
?>