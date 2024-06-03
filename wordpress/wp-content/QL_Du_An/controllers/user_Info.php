<?php 
    include 'base_controllers.php';
    include getenv('DIR_MODELS') . '/User.php';

    $userInfo_name = $_COOKIE['username'] ?? null;
    $userInfo_method = $_POST['method'] ?? null;

    if(isset($userInfo_name)){
        $User = GetUser($userInfo_name);

        $Staff = $User->Staff;

        $Qualifications = GetQualifications($Staff);

        $Teams = GetTeams($Staff);

        $Department = GetDepartments($Teams);
    }
    else{
        die();
    }

    if($userInfo_method === "confirm_password" && $User != null){
        $currentPassword = $_POST['current-password'];
        $newPassword = $_POST['new-password'];

        $username_json = str_replace("\\", "", $_COOKIE['username']);
        $username = json_decode($username_json, JSON_UNESCAPED_UNICODE);

        $isConfirmPassword = $User->ChangePassword($username['accountID'], $currentPassword, $newPassword);
    }
    
function GetUser($username){
    // Xóa dấu / để chuẩn hóa thành chuỗi json
    $json_string = stripslashes($username);
    $userInfo = json_decode($json_string);

    $accountID = $userInfo->accountID;

    $User = new User((int)$accountID);

    return $User;
}

function GetQualifications($Staff){
    return $Staff->GetStaffQualifications();
}

function GetTeams($Staff){
    return [$Staff->GetTeams()];
}

function GetDepartments($Teams){
    $Departments = [];


    foreach($Teams as $key => $Team){
        $Departments = $Team->GetTeamDepartment();
    }

    return $Departments;
}

?>