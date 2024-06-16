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
$name = $_POST['name_user'] ?? null;
$gender = $_POST['gender_user'] ?? null;
$birthday = $_POST['birthday_user'] ?? null;
$phone = $_POST['phone_user'] ?? null;
$email = $_POST['email_user'] ?? null;
$address = $_POST['address_user'] ?? null;


$method = $_POST['method'] ?? null;
if($method === 'request_editing'){
    // print_r($id.' '. $name.' '. $phone.' '. $address.' '. $birthday.' '. $email.' '. $gender);exit;
    // print_r("abc");exit;
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