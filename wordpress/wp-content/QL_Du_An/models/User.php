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