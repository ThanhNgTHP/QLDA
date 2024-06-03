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
            Add($name, $path, (int)$projectID, (int)$contractID, $imageCategory);
        }

        $method = $_POST['method'];
        if($method === 'add'){
            $image = new Image();
            $image->Add($name, $path, (int)$projectID, (int)$contractID, $imageCategory);
        }
        else if($method === 'edit'){
            $image = new Image();
            $image->Edit($id, $name, $path, (int)$projectID, (int)$contractID, $imageCategory);
        }
        else if($method === 'delete'){
            $image = new Image();
            $image->Delete($id);
        }
        else if($method === 'find'){
            $image = new Image();
            $images = $image->Find($name);
        }
    }

    function Add($name, $path, $projectID, $contractID, $imageCategory){
        $image = new Image();
        $image->Add($name, $path, $projectID, $contractID, $imageCategory);
    }

    function Edit($id, $name, $path, $projectID, $contractID, $imageCategory){
        $image = new Image();
        $image->Edit($id, $name, $path, $projectID, $contractID, $imageCategory);
    }

    function Deleted($id){
        $image = new Image();
        $image->Delete($id);
    }

    function Find($abc){
        $image = new Image();
        return $image->Find($abc);
    }
?>