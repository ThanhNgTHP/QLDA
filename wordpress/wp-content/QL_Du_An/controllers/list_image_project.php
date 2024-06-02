<?php 
include_once getenv('DIR_MODELS') . '/Project.php';
include 'base_controllers.php';

$projectID = $_GET['projectID'] ?? null;
if(!isset($projectID)){
    // xử lý ngoại lệ
    exit;
}

$ProjectImages = GetImagesWhereProjectID($projectID);
$ProjectName = GetProjectName($projectID);

function GetImagesWhereProjectID($projectID){
    $Project = new Project();
    $Project->ID = $projectID;
    $ProjectImages = $Project->GetImages();

    return $ProjectImages;
}

function GetProjectName($projectID){
    [$Project] = array_values(array_filter(Project::GetAllProject(), function ($project) use ($projectID){
        return $project->ID == $projectID;
    }));

    return $Project->Name;
}
?>