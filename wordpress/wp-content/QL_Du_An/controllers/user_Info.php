<?php 
    include 'base_controllers.php';
    include getenv('DIR_MODELS') . '/User.php';

    $userInfo_string = $_COOKIE['username'] ?? null;

    if(!isset($userInfo_string)){
        die();
    }
    // Xóa dấu / để chuẩn hóa thành chuỗi json
    $json_string = stripslashes($userInfo_string);
    $userInfo = json_decode($json_string);

    $accountID = $userInfo->accountID;

    $User = new User((int)$accountID);
?>