<?php 

    include getenv('DIR_MODELS') . '/ProjectCategory.php';
    $projectCategories = ProjectCategory::GetAllProjectCategory();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $description = $_FILES["description"] ?? null;
    

    if(isset($name)  && isset($projectID)){
        if(isset($path)){
            move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
        }

        $method = $_POST['method'];
        if($method === 'add'){
            $projectCategory = new ProjectCategory();
            $projectCategory->Add($name, $description);
        }
        else if($method === 'edit'){
            $projectCategory = new ProjectCategory();
            $projectCategory->Edit($id, $name, $description);
        }
        else if($method === 'delete'){
            $projectCategory = new ProjectCategory();
            $projectCategory->Delete($id);
        }
        else if($method === 'find'){
            $projectCategory = new ProjectCategory();
            $projectCategorys = $projectCategory->Find($name);
        }        
    }
    function Add($name, $description){
        $projectCategory = new ProjectCategory();
        $projectCategory->Add($name, $description);
    }

    function Edit($id, $name, $description){
        $projectCategory = new ProjectCategory();
        $projectCategory->Edit($id, $name, $description);
    }

    function Delete($id){
        $projectCategory = new ProjectCategory();
        $projectCategory->Delete($id);
    }

    function Find($abc){
        $projectCategory = new ProjectCategory();
        return $projectCategory->Find($abc);
    }
?>