<?php 

    include getenv('DIR_MODELS') . '/Event.php';
    $events = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $image = $_FILES["image"] ?? null;
    $note = $_POST['note'] ?? null;
    $content = $_POST['content'] ?? null;
    $projectID = $_POST['projectID'] ?? null;

    $method = $_POST['method'] ?? null;
    if($method === 'add' && isset($name) && isset($note) && isset($content) && isset($projectID)){
        if(isset($image)){
            move_uploaded_file($image["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
        }
        Add($name, $image, $note, $content, $projectID);
        $events = Event::GetAllEvent();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($note) && isset($content) && isset($projectID)){
        Edit($id, $name, $image, $note, $content, $projectID);
        $events = Event::GetAllEvent();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $events = Event::GetAllEvent();
    }
    else if($method === 'find'){
        $eventName = $_POST['eventName'];
        $events = Find($eventName);
    }
    else {
        $events = Event::GetAllEvent();
    }

    function Add($name, $image, $note, $content, $projectID){
        $event = new Event();
        $event->Add($name, $image, $note, $content, $projectID);
    }

    function Edit($id, $name, $image, $note, $content, $projectID){
        $event = new Event();
        $event->Edit($id, $name, $image, $note, $content, $projectID);
    }

    function Delete($id){
        $event = new Event();
        $event->Delete($id);
    }

    function Find($name){
        $event = new Event();
        return $event->Find($name);
    }
?>