<?php 
if(!class_exists('Team')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    include_once getenv('DIR_MODELS') . '/Department.php';
    include_once getenv('DIR_MODELS') . '/Job.php';

    class Team{
        /**
         * @var int $ID
         */
        public $ID;

        /**
         * @var string $Name
         */
        public $Name;

        /**
         * @var string $Leader
         */
        public $Leader;

        /**
         * @var int $DepartmentID
         */
        public $DepartmentID;

        /**
         * Lấy ra danh sách thành viên trong nhóm
         *
         * @return Staff[]
         */
        public function GetStaffs(){
            $action = new ActionDB();
            $result = $action->TeamStaffsInfo($this->ID);

            $staffs = array();

            while($row = $result->fetch_assoc()) {
                $staff = new Staff();

                $staff->ID = $row['ID'];
                $staff->Name = $row['Name'];
                $staff->Phone = $row['Phone'];
                $staff->Address = $row['Address'];
                $staff->BirthDay = $row['BirthDay'];
                $staff->Position = $row['Position'];
                $staff->Email = $row['Email'];
                $staff->AccountID = $row['AccountID'];
                $staff->Gender = $row['Gender'];
                $staff->Status = $row['Status'];
                $staff->TeamID = $row['TeamID'];

                $staffs[] = $staff;
            }

            return $staffs;
        }

        /**
         * Lấy ra nhóm thuốc phòng ban nào
         *
         * @return Department
         */
        public function GetTeamDepartment(){
            $DepartmentID = $this->DepartmentID;
            [$Department] = array_values(array_filter(Department::GetAllDepartment(), function($department) use($DepartmentID){
                return $department->ID === $DepartmentID;
            }));



            $this->DepartmentID = $Department->ID;

            return $Department;
        }

        /**
         * Lấy ra nhóm có công việc
         *
         * @return Job
         */
        public function GetTeamJob(){
            $TeamID = $this->ID;
            [$Job] = array_values(array_filter(Job::GetAllJob(), function($job) use($TeamID){
                return $job->TeamID === $TeamID;
            }));
            
            return $Job;
        }

        public static function GetAllTeam(){
            $actionDB = new ActionDB();

            $result = $actionDB->TeamAllInfo();

            $teamAll = array();

            while($row = $result->fetch_assoc()) {
                $team = new Team();

                $team->ID = $row['ID'];
                $team->Name = $row['Name'];
                $team->Leader = $row['Leader'];
                $team->DepartmentID = $row['DepartmentID'];

                $teamAll[] = $team;
            }

            return $teamAll;
        }
    }
}