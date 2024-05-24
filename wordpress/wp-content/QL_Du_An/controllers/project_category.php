<?php 

    include getenv('DIR_MODELS') . '/ProjectCategory.php';
    $projectCategories = ProjectCategory::GetAllProjectCategory();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $path = $_FILES["path"] ?? null;
    $projectID = $_POST['project-id'] ?? null;
    

    if(isset($name)  && isset($projectID)){
        if(isset($path)){
            move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
        }

        $method = $_POST['method'];
        if($method === 'add'){
            $image = new Image();
            $image->Add($name, $path, (int)$projectID);
        }
        else if($method === 'edit'){
            $image = new Image();
            $image->Edit($id, $name, $path, (int)$projectID);
        }
        else if($method === 'delete'){
            $image = new Image();
            $image->Delete($id);
        }
    }
?>