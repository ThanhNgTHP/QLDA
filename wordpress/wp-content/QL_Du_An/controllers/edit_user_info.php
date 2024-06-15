<?php 
    include_once getenv('DIR_DB') . '/ActionDB.php';


$staffID = $_GET['staffID'] ?? null;
if(!isset($staffID)){
    // xử lý ngoại lệ
    exit;
}



$staff = new Staff();
$staff = GetStaffInfo($staffID);

$id = $_POST['id'] ?? null;
$name = $_POST['name'] ?? null;
$gender = $_POST['gender'] ?? null;
$birthday = $_POST['birthday'] ?? null;
$phone = $_POST['phone'] ?? null;
$email = $_POST['email'] ?? null;
// $address = $_POST['address'] ?? null;


$method = $_POST['method'] ?? null;
if($method === 'request_editing'){
    // print_r($id.' '. $name.' '. $phone.' '. $address.' '. $birthday.' '. $email.' '. $gender);exit;
    print_r("abc");exit;
    $action = new ActionDB();
    $action->EditUserInfo($id, $name, $phone, $address, $birthday, $email, $gender);
    $staff = GetStaffInfo($staffID);
}
else {
    $staff = GetStaffInfo($staffID);
}
function GetStaffInfo($staffID){
    [$Staff] = array_values(array_filter(Staff::GetAllStaff(), function ($staff) use ($staffID){
        return $staff->ID == $staffID;
    }));
    return $Staff;
}
?>  