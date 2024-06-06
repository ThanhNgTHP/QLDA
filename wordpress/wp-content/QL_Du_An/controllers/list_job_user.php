<?php 
include_once getenv('DIR_MODELS') . '/Job.php';
include_once getenv('DIR_MODELS') . '/Project.php';
include_once getenv('DIR_MODELS') . '/Team.php';
include 'base_controllers.php';

$staffID = $_GET['staffID'] ?? null;
if(!isset($staffID)){
    // xử lý ngoại lệ
    exit;
}

$job = new Job();
$job->StaffID = $staffID;
$jobs = $job->GetJobStaff();


function GetNameProject($projectID){
    [$Project] = array_values(array_filter(Project::GetAllProject(), function ($project) use ($projectID){
        return $project->ID == $projectID;
    }));
    return $Project->Name;
}
function GetNameTeam($teamID){
    [$Team] = array_values(array_filter(Team::GetAllTeam(), function ($team) use ($teamID){
        return $team->ID == $teamID;
    }));
    return $Team->Name;
}
?>