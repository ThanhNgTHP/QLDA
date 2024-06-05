<?php 
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        include 'base_controllers.php';
        include getenv('DIR_MODELS') . '/Permission.php';
        include getenv('DIR_MODELS') . '/Account.php';
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if(!class_exists('User')){
            include_once 'E:\Tong Hop\PHP\wordpress\wp-content\QL_Du_An\db\ActionDB.php';
            include_once '../db/ActionDB.php';
            include_once '../models/Account.php';
            include_once '../models/Permission.php';
            include_once '../models/Staff.php';
        
            // include_once getenv('DIR_DB') . '../ActionDB.php';
            // include_once getenv('DIR_MODELS') . '../Account.php';
            // include_once getenv('DIR_MODELS') . '../Permission.php';
            // include_once getenv('DIR_MODELS') . '../Staff.php';
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

        header('Content-Type: application/json');

        // spl_autoload_register(function ($class_name) {
		//     include '../db/' . $class_name . '.php';
        // });

        $actionDB = new ActionDB();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $result = $actionDB->VerifyAccount($username, $password);
        
        $loginInfo = array();

        while($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                $loginInfo[$key] = $value;
            }
        }

        echo json_encode($loginInfo, JSON_UNESCAPED_UNICODE);
    }
?>