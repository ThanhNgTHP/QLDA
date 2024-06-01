<?php 
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Job.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';

    $projectID = $_GET['projectID'] ?? null;
    if(!isset($projectID)){
        // xử lý ngoại lệ
        exit;
    }

    $jobs = GetAllJob();
    if(count($jobs) > 0){
        $team = GetTeam($jobs[0]);
        $department = GetDepartment($team);
    }

    function GetAllJob(){
        return Job::GetAllJob();
    }

    function GetTeam($job){
        return $job->JobTeam();
    }

    function GetDepartment($team){
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