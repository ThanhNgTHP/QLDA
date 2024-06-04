<?php 

    include getenv('DIR_MODELS') . '/ProjectCategory.php';
    $projectCategories = ProjectCategory::GetAllProjectCategory();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $description = $_FILES["description"] ?? null;
    

    if(isset($path)){
        move_uploaded_file($path["tmp_name"], $base_path_folder_image . '/' . $path["name"]);
    }

    $method = $_POST['method'] ?? null;
    if($method === 'add' && isset($name) && isset($projectID) && isset($description)){
        Add($name, $description);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($projectID) && isset($description)){
        Edit($id, $name, $description);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $projectCategoryName = $POST['project-category-name'];
        $projectCategories = Find($projectCategoryName);
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

    function Find($name){
        $projectCategory = new ProjectCategory();
        return $projectCategory->Find($name);
    }
?>