<?php 
    include getenv('DIR_MODELS') . '/Image.php';

    $base_path_folder_image = ABSPATH . '\wp-content\QL_Du_An\resources\img';

    $images = Image::GetAllImage();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $path = $_FILES["path"] ?? null;
    $projectID = $_POST['project-id'] ?? null;

    $method = $_POST['method'] ?? null;
    if($method === 'add' && isset($name) && isset($projectID)){
        if(isset($path)){
            move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
        }
        Add($name, $path, (int)$projectID, (int)$contractID, $imageCategory);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($projectID)){
        Edit($id, $name, $path, (int)$projectID, (int)$contractID, $imageCategory);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $imageName = $_POST['image-name'];
        $images = Find($imageName);
    }

    function Add($name, $path, $projectID, $contractID, $imageCategory){
        $image = new Image();
        $image->Add($name, $path, $projectID, $contractID, $imageCategory);
    }

    function Edit($id, $name, $path, $projectID, $contractID, $imageCategory){
        $image = new Image();
        $image->Edit($id, $name, $path, $projectID, $contractID, $imageCategory);
    }

    function Delete($id){
        $image = new Image();
        $image->Delete($id);
    }

    function Find($name){
        $image = new Image();
        return $image->Find($name);
    }
?>