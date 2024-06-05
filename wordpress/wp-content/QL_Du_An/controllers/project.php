<?php 

    include getenv('DIR_MODELS') . '/Project.php';

    $projects = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $begin = $_POST['begin'] ?? null;
    $end = $_POST['end'] ?? null;
    $status = $_POST['status'] ?? null;
    $contact = $_POST['contact'] ?? null;
    $description = $_POST['description'] ?? null;
    $projectCategoryID = $_POST['projectCategoryID'] ?? null;
    $targetBudget = $_POST['targetBudget'] ?? null;
    $actualBudget = $_POST['actualBudget'] ?? null;
    $progress = $_POST['progress'] ?? null;

    

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($begin) && isset($end)
    && isset($status) && isset($contact) && isset($description)
    && isset($projectCategoryID) && isset($targetBudget) && isset($actualBudget)
    && isset($progress)){
        Add($name, $begin, $end, $status, $contact, $description, $projectCategoryID, $targetBudget, $actualBudget, $progress);
        $projects = Project::GetAllProject();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($begin) && isset($end)
    && isset($status) && isset($contact) && isset($description) 
    && isset($projectCategoryID) && isset($targetBudget) && isset($actualBudget)
        && isset($progress)){
        Edit($id, $name, $begin, $end, $status, $contact, $description, $projectCategoryID, $targetBudget, $actualBudget, $progress);
        $projects = Project::GetAllProject();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $projects = Project::GetAllProject();
    }
    else if($method === 'find'){
        $projectName = $_POST['projectName'];
        $projects = Find($projectName);
    }
    else {
        $projects = Project::GetAllProject();
    }

    function Add($name, $begin, $end, $status, $contact, $description, $projectCategoryID, $targetBudget, $actualBudget, $progress){
        $project = new Project();
        $project->Add($name, $begin, $end, $status, $contact, $description, $projectCategoryID, $targetBudget, $actualBudget, $progress);
    }

    function Edit($id, $name, $begin, $end, $status, $contact, $description, $projectCategoryID, $targetBudget, $actualBudget, $progress){
        $project = new Project();
        $project->Edit($id, $name, $begin, $end, $status, $contact, $description, $projectCategoryID, $targetBudget, $actualBudget, $progress);
    }

    function Delete($id){
        $project = new Project();
        $project->Delete($id);
    }

    function Find($name){
        $project = new Project();
        return $project->Find($name);
    }

?>