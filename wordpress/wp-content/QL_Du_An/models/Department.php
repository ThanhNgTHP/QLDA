<?php 
if(!class_exists('Department')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Team.php';
    class Department{
        /**
         * @var int $ID
         */
        public $ID;

        /**
         * @var string $Name
         */
        public $Name;

        /**
         * @var string $Description
         */
        public $Description;

        /**
         * Lấy danh sách  nhóm thuộc phòng ban
         *
         * @return Team[]
         */
        public function GetDepartmentTeamsInfo(){
            $action = new ActionDB();
            $result = $action->DepartmentTeamsInfo($this->ID);

            $teams = array();

            while($row = $result->fetch_assoc()) {
                $team = new Team();

                $team->ID = $row['ID'];
                $team->Name = $row['Name'];
                $team->Leader = $row['Leader'];
                $team->DepartmentID = $row['DepartmentID'];

                $teams[] = $team;
            }

            return $teams;
        }

        public static function GetAllDepartment(){
            $actionDB = new ActionDB();

            $result = $actionDB->DepartmentAllInfo();

            $departmentAll = array();

            while($row = $result->fetch_assoc()) {
                $department = new Department();

                $department->ID = $row['ID'];
                $department->Name = $row['Name'];
                $department->Description = $row['Description'];

                $departmentAll[] = $department;
            }

            return $departmentAll;
        }

        public function Add($name, $description){
            $actionDB = new ActionDB();
            $actionDB->AddDepartment($name, $description);
        }

        public function Edit($id, $name, $description){
            $actionDB = new ActionDB();
            $actionDB->EditDepartment($id, $name, $description);
        }
        
        public function Delete($id){
            $actionDB = new ActionDB();
            $actionDB->DeleteDepartment($id);
        }            

        public function Find($name){
            $actionDB = new ActionDB();

            $result = $actionDB->FindDepartment($name);

            $findDepartments = array();

            while($row = $result->fetch_assoc()) {
                $department = new Department();

                $department->ID = $row['ID'];
                $department->Name = $row['Name'];
                $department->Description = $row['Description'];

                $findDepartments[] = $department;
            }

            return $findDepartments;
        }
    }
}
    

?>