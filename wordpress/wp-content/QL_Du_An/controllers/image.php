<?php 
    include getenv('DIR_MODELS') . '/Image.php';

    $base_path_folder_image = ABSPATH . '\wp-content\QL_Du_An\resources\img';

    $images = Image::GetAllImage();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $path = $_FILES["path"] ?? null;
    $projectID = $_POST['project-id'] ?? null;

    if(isset($name)  && isset($projectID)){
        if(isset($path)){
            move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
            Add($name, $path, (int)$projectID);
        }

        $method = $_POST['method'];
        if($method === 'add'){
            Add($name, $path, (int)$projectID);
        }
        else if($method === 'edit'){
           Edit($id, $name, $path, (int)$projectID);
        }
        else if($method === 'delete'){
            Delete($id);
        }
        else if($method === 'find'){
            $images = Find($name);
        }
    }

    function Add($name, $path, $projectID){
        $image = new Image();
        $image->Add($name, $path, $projectID);
    }

    function Edit($id, $name, $path, $projectID){
        $image = new Image();
        $image->Edit($id, $name, $path, $projectID);
    }

    function Delete($id){
        $image = new Image();
        $image->Delete($id);
    }

    function Find($abc){
        $image = new Image();
        return $image->Find($abc);
    }
?>