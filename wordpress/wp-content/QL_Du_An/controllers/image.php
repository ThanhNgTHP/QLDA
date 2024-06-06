<?php 
    include getenv('DIR_MODELS') . '/Image.php';

    $base_path_folder_image = ABSPATH . 'wp-content\QL_Du_An\resources\img';

    $images = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $path = $_FILES["path"] ?? null;
    $imageCategory = $_POST["imageCategory"] ?? null;
    $projectID = $_POST['projectID'] ?? null;
    $contractID = $_POST['contractID'] ?? null;


    $method = $_POST['method'] ?? null;
    if($method === 'add'&& isset($name) && isset($projectID) && isset($contractID) && isset($imageCategory)){
        if(isset($path)){
            move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
        } 
        
        Add($name, $base_path_folder_image . '/' . $path["name"], (int)$projectID, (int)$contractID, $imageCategory);
        $images = Image::GetAllImage();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($path) && isset($projectID) && isset($contractID) && isset($imageCategory)){
        if(isset($path)){
            move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
        }
        
        Edit($id, $name, $base_path_folder_image . '/' . $path["name"], (int)$projectID, (int)$contractID, $imageCategory);
        $images = Image::GetAllImage();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $images = Image::GetAllImage();
    }
    else if($method === 'find'){
        $imageName = $_POST['imageName'];
        $images = Find($imageName);
    }
    else {
        $images = Image::GetAllImage();
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