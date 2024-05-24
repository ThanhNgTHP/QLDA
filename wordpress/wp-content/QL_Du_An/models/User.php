<?php 
if(!class_exists('User')){
    include_once getenv('DIR_MODELS') . '/Account.php';
    include_once getenv('DIR_MODELS') . '/Permission.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    include_once getenv('DIR_MODELS') . '/Team.php';
    include_once getenv('DIR_MODELS') . '/Qualification.php';
    include_once getenv('DIR_MODELS') . '/Department.php';
    class User{

        /** @var Staff $Staff */
        public $Staff;

        /** @var Account $Account */
        public $Account;

         /** @var Permission $Permission */
         public $Permission;

        /** @var Qualification[] $Qualifications */
        public $Qualifications;

        /** @var Team $Team */
        public $Team;

        /** @var Department $Department */
        public $Department;
        public function __construct($AccountID){
            [$Account] = array_values(array_filter(Account::GetAllAccount(), function($account) use($AccountID){
                return $account->ID === $AccountID;
            }));
            $this->Account = $Account;

            $this->Permission = $Account->GetAccountPermission();
            $this->Staff = $Account->GetAccountStaff();
            $this->Qualifications = $this->Staff->GetStaffQualifications();
            $this->Team = $this->Staff->GetStaffTeam();
            $this->Department = $this->Team->GetTeamDepartment();
        }
    }
}
    
?>