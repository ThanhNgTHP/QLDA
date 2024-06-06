<?php 

    include getenv('DIR_MODELS') . '/Job.php';
    $jobs = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $content = $_POST['content'] ?? null;
    $note = $_POST['note'] ?? null;
    $begin = $_POST['begin'] ?? null;
    $end = $_POST['end'] ?? null;
    $teamID = $_POST['teamID'] ?? null;
    $projectID = $_POST['projectID'] ?? null;
    $progress = $_POST['progress'] ?? null;
    $priority = $_POST['priority'] ?? null;
    $targetBudget = $_POST['targetBudget'] ?? null;
    $actualBudget = $_POST['actualBudget'] ?? null;
    $staffID = $_POST['staffID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($content) && isset($note) 
    && isset($begin) && isset($end) && isset($teamID) && isset($projectID)
    && isset($progress) && isset($priority) && isset($targetBudget)
    && isset($actualBudget) && isset($staffID)){
        Add($name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID);
        $jobs = Job::GetAllJob();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($content) && isset($note) 
    && isset($begin) && isset($end) && isset($teamID) && isset($projectID)
    && isset($progress) && isset($priority) && isset($targetBudget)
    && isset($actualBudget) && isset($staffID)){
        // print_r($end.'cacs');exit;
        Edit($id, $name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID);
        $jobs = Job::GetAllJob();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $jobs = Job::GetAllJob();
    }
    else if($method === 'find'){
        $jobName = $_POST['jobName'];
        $jobs = Find($jobName);
    }
    else{
        $jobs = Job::GetAllJob();
    }

    function Add($name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID){
        $job = new Job();
        $job->Add($name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID);
    }

    function Edit($id, $name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID){
        $job = new Job();
        $job->Edit($id, $name, $content, $note, $begin, $end, $teamID, $projectID, $progress, $priority, $targetBudget, $actualBudget, $staffID);
    }

    function Delete($id){
        $job = new Job();
        $job->Delete($id);
    }

    function Find($name){
        $job = new Job();
        return $job->Find($name);
    }
?>