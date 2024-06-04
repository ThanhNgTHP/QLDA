<?php 

    include getenv('DIR_MODELS') . '/Account.php';
    $accounts = Account::GetAllAccount();

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $password = $_FILES["password"] ?? null;
    $status = $_POST['status'] ?? null;
    $permissonID = $_POST['permissonID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($password) && isset($status) && isset($permissonID)){
        Add($name, $password, $status, $permissonID);
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($password) && isset($status) && isset($permissonID)){
        Edit($id, $name, $password, $status, $permissonID);
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
    }
    else if($method === 'find'){
        $accountName = $_POST['account-name'];
        $accounts = Find($accountName);
    }

    function Add($name, $password, $status, $permissonID){
        $account = new Account();
        $account->Add($name, $password, $permissonID, $status);
    }

    function Delete($id){
        $account = new Account();
        $account->Delete($id);
    }

    function Edit($id, $name, $password, $status, $permissonID){
        $account = new Account();
        $account->Edit($id, $name, $password, $permissonID, $status);
    }

    function Find($name){
        $account = new Account();
        return $account->Find($name);
    }
?>