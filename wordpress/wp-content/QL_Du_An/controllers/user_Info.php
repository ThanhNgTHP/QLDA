<?php 

if(!class_exists('User')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Account.php';
    include_once getenv('DIR_MODELS') . '/Permission.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    class User{

        /** @var Staff $Staff */
        public $Staff;

        /** @var Account $Account */
        public $Account;

         /** @var Permission $Permission */
         public $Permission;

        public function __construct($AccountID){
            [$Account] = array_values(array_filter(Account::GetAllAccount(), function($account) use($AccountID){
                return $account->ID === $AccountID;
            }));
            $this->Account = $Account;

            $this->Permission = $Account->GetAccountPermission();
            $this->Staff = $Account->GetAccountStaff();
        }

        public function ChangePassword($accountID, $currentPassword, $newPassword){

            $action = new ActionDB();
            $result = $action->ChangePassword($accountID, $currentPassword, $newPassword);
            
            while($row = $result->fetch_assoc()) {

                return (bool) $row["State"];
            }

            return false;
        }
    }
}

?>

<?php 
    include 'base_controllers.php';
    
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