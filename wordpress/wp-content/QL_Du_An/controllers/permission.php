<?php 

    include getenv('DIR_MODELS') . '/permission.php';
    $permissions = Permission::GetAllPermission();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $note = $_POST['note'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($note)){
        Add($name, $note);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($note)){
        Edit($id, $name, $note);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $permissionName = $_POST['permission-name'];
        $permissions = Find($permissionName);
    }
    function Add($name, $note){
        $permission = new Permission();
        $permission->Add($name, $note);
    }

    function Edit($id, $name, $note){
        $permission = new Permission();
        $permission->Edit($id, $name, $note);
    }

    function Delete($id){
        $permission = new Permission();
        $permission->Delete($id);
    }

    function Find($name){
        $permission = new Permission();
        return $permission->Find($name);
    }
?>