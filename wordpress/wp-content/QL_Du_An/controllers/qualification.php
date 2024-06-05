<?php 

    include getenv('DIR_MODELS') . '/qualification.php';
    $qualifications = [];

    $id = $_POST['id'] ?? null;
    $name = $_POST['name'] ?? null;
    $date = $_POST['date'] ?? null;
    $address = $_POST['address'] ?? null;
    $staffID = $_POST['staffID'] ?? null;

    $method = $_POST['method'] ?? null;

    if($method === 'add' && isset($name) && isset($date) && isset($address) && isset($staffID)){
        Add($name, $date, $address, $staffID);
        $qualifications = Qualification::GetAllQualification();
    }
    else if($method === 'edit' && isset($id) && isset($name) && isset($date) && isset($address) && isset($staffID)){
        Edit($id, $name, $date, $address, $staffID);
        $qualifications = Qualification::GetAllQualification();
    }
    else if($method === 'delete' && isset($id)){
        Delete($id);
        $qualifications = Qualification::GetAllQualification();
    }
    else if($method === 'find'){
        $qualificationName = $_POST['qualificationName'];
        $qualifications = Find($qualificationName);
    }
    else {
        $qualifications = Qualification::GetAllQualification();
    }

    function Add($name, $date, $address, $staffID){
        $qualification = new Qualification();
        $qualification->Add($name, $date, $address, $staffID);
    }

    function Edit($id, $name, $date, $address, $staffID){
        $qualification = new Qualification();
        $qualification->Edit($id, $name, $date, $address, $staffID);
    }

    function Delete($id){
        $qualification = new Qualification();
        $qualification->Delete($id);
    }

    function Find($name){
        $qualification = new Qualification();
        return $qualification->Find($name);
    }
?>