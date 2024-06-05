<?php 

if(!class_exists('Account')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    include_once getenv('DIR_MODELS') . '/Permission.php';
    class Account{
        /** @var int $ID */
        public $ID;

        /** @var string $Name */
        public $Name;

        /** @var string $Status */
        public $Status;

        /** @var string $Password */
        public $Password;

        /** @var string $PermissionID */
        public $PermissionID;

        public static function GetAllAccount(){
            $actionDB = new ActionDB();
    
            $result = $actionDB->AccountAllInfo();

            $accountAll = array();

            while($row = $result->fetch_assoc()){
                $account = new Account();

                $account->ID = $row['ID'];
                $account->Name = $row['Name'];
                $account->Status = $row['Status'];
                $account->Password = $row['Password'];
                $account->PermissionID = $row['PermissionID'];
                
                $accountAll[] = $account;
            }
            return $accountAll;
        }

        /**
         * Lấy ra tài khoản thuộc nhân viên
         *
         * @return Staff
         */
        public function GetAccountStaff(){
            $AccountID = $this->ID;
            [$staff] = array_values(array_filter(Staff::GetAllStaff(), function($staff) use($AccountID){
                return $staff->AccountID === $AccountID;
            }));

            return $staff;
        }

        /**
         * Lấy ra tài khoản có quyền
         *
         * @return Permission
         */
        public function GetAccountPermission(){
            $PermissionID = $this->PermissionID;
            [$Permission] = array_values(array_filter(Permission::GetAllPermission(), function($permission) use($PermissionID){
                return $permission->ID === $PermissionID;
            }));

            return $Permission;
        }

        public function Add($name, $password, $permissionID, $status){
            $actionDB = new ActionDB();
            $actionDB->AddAccount($name, $password, $permissionID, $status);
        }

        public function Edit($id, $name, $password, $permissionID, $status){
            $actionDB = new ActionDB();
            $actionDB->EditAccount($id, $name, $password, $permissionID, $status);
        }
        
        public function Delete($id){
            $actionDB = new ActionDB();
            $actionDB->DeleteAccount($id);
        }            

        public function Find($name){
            $actionDB = new ActionDB();
    
            $result = $actionDB->FindAccount($name);

            $findAccounts = array();

            while($row = $result->fetch_assoc()){
                $account = new Account();

                $account->ID = $row['ID'];
                $account->Name = $row['Name'];
                $account->Status = $row['Status'];
                $account->Password = $row['Password'];
                $account->PermissionID = $row['PermissionID'];
                
                $findAccounts[] = $account;
            }
            return $findAccounts;
        }
    }
}