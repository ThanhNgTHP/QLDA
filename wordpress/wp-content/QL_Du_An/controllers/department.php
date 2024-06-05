<?php 

    include getenv('DIR_MODELS') . '/Department.php';
    $departments = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $description = $_POST['description'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($description)){
        Add($name, $description);
        $departments = Department::GetAllDepartment();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($description)){
        Edit($id, $name, $description);
        $departments = Department::GetAllDepartment();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $departments = Department::GetAllDepartment();
    }
    else if($method === 'find'){
        $departmentName = $_POST['departmentName'];
        $departments = Find($departmentName);
    }
    else {
        $departments = Department::GetAllDepartment();
    }
    function Add($name, $description){
        $department = new Department();
        $department->Add($name, $description);
    }

    function Delete($id){
        $department = new Department();
        $department->Delete($id);
    }

    function Edit($id, $name, $description){
        $department = new Department();
        $department->Edit($id, $name, $description);
    }

    function Find($name){
        $department = new Department();
        return $department->Find($name);
    }
?>