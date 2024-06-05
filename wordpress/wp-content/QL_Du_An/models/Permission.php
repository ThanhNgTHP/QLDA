<?php 

if(!class_exists('Permission')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Account.php';
    class Permission{
        /** @var int $ID */
        public $ID;

        /** @var string $Name */
        public $Name;

        /** @var string $Note */
        public $Note;

        /**
         * Lấy ra danh sách tài khoản thuộc quyền
         *
         * @return JoinStaff[]
         */
        public function GetPermissionAccounts(){
            $action = new ActionDB();
            $result = $action->PermissionAccountsInfo($this->ID);

            $accounts = array();

            while($row = $result->fetch_assoc()) {
                $account = new Account();

                $account->ID = $row['ID'];
                $account->Name = $row['Name'];
                $account->Password = $row['Password'];
                $account->PermissionID = $row['PermissionID'];

                $accounts[] = $account;
            }

            return $accounts;
        }

        public static function GetAllPermission(){
            $actionDB = new ActionDB();
    
            $result = $actionDB->PermissionAllInfo();

            $permissionAll = array();

            while($row = $result->fetch_assoc()){
                $permission = new Permission();

                $permission->ID = $row['ID'];
                $permission->Name = $row['Name'];
                $permission->Note = $row['Note'];
                
                
                $permissionAll[] = $permission;
            }

            return $permissionAll;
        }

        public function Add($name, $note){
            $actionDB = new ActionDB();
            $actionDB->AddPermission($name, $note);
        }

        public function Edit($id, $name, $note){
            $actionDB = new ActionDB();
            $actionDB->EditPermission($id, $name, $note);
        }
        
        public function Delete($id){
            $actionDB = new ActionDB();
            $actionDB->DeletePermission($id);
        }            

        public function Find($name){

            $actionDB = new ActionDB();
    
            $result = $actionDB->FindPermission($name);

            $findPermissions = array();

            while($row = $result->fetch_assoc()){
                $permission = new Permission();

                $permission->ID = $row['ID'];
                $permission->Name = $row['Name'];
                $permission->Note = $row['Note'];
                
                
                $findPermissions[] = $permission;
            }

            return $findPermissions;
        }
    }
}