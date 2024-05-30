<?php 


if(!class_exists('Staff')){

    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Qualification.php';
    include_once getenv('DIR_MODELS') . '/JoinStaff.php';
    include_once getenv('DIR_MODELS') . '/Team.php';
    include_once getenv('DIR_MODELS') . '/Account.php';


    class Staff{
        /**
         * @var int $ID
         */
        public $ID;

        /**
         * @var string $Name
         */
        public $Name;

        /**
         * @var string $Phone
         */
        public $Phone;

        /**
         * @var string $Address
         */
        public $Address;

        /**
         * @var Date $BirthDay
         */
        public $BirthDay;

        /**
         * @var string $Position
         */
        public $Position;

        /**
         * @var string $Email
         */
        public $Email;
        
         /**
         * @var string $Gender
         */
        public $Gender;

        /**
         * @var string $Status
         */
        public $Status;

        /**
         * @var string $Avatar
         */
        public $Avatar;


         /**
         * @var int $AccountID
         */
        public $AccountID;
        
        /**
         * @var int $ProjectID
         */
        public $ProjectID; 

        /**
         * Lấy ra danh sách bằng cấp của nhân viên 
         *
         * @return Qualification[]
         */
        public function GetStaffQualifications(){
            $action = new ActionDB();
            $result = $action->QualificationStaff($this->ID);

            $qualifications = array();

            while($row = $result->fetch_assoc()) {
                $qualification = new Qualification();

                $qualification->ID = $row['ID'];
                $qualification->Name = $row['Name'];
                $qualification->Address = $row['Address'];
                $qualification->Date = $row['Date'];
                $qualification->StaffID = $row['StaffID'];

                $qualifications[] = $qualification;
            }

            return $qualifications;
        }
        
        /**
         * Lấy ra danh sách thành viên tham gia thuộc dự án
         *
         * @return JoinStaff[]
         */
        public function GetStaffJoinStaffs(){
            $action = new ActionDB();
            $result = $action->StaffJoinStaffsInfo($this->ID);

            $joinStaffs = array();

            while($row = $result->fetch_assoc()) {
                $joinStaff = new JoinStaff();

                $joinStaff->ID = $row['ID'];
                $joinStaff->StaffID = $row['StaffID'];
                $joinStaff->ProjectID = $row['ProjectID'];

                $joinStaffs[] = $joinStaff;
            }

            return $joinStaffs;
        }

        /**
         * Lấy ra thành viên thuộc các nhóm
         *
         * @return Team
         */
        public function GetTeams(){
            $StaffID = $this->ID;

            $Jobs = array_values(array_filter(Job::GetAllJob(), function($job) use($StaffID){
                return $job->StaffID === $StaffID;
            }));

            $Teams = [];
            foreach ($Jobs as $key => $job){
                $TeamID = $job->TeamID;
                $Teams = array_values(array_filter(Team::GetAllTeam(), function($team) use($TeamID){
                    return $team->ID === $TeamID;
                }));
            }

            return $Teams;
        }

        public static function GetAllStaff() { 
            $actionDB = new ActionDB();

            $result = $actionDB->StaffAllInfo();

            $staffAll = array();

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
                $staff->Avatar = $row['Avatar'];

                $staffAll[] = $staff;
            }

            return $staffAll;
        } 

        public function GetStaffAccount(){
            
            $AccountID = $this->AccountID;
            
            [$account] = array_values(array_filter(Account::GetAllAccount(), function ($account) use ($AccountID){
                return $account->ID === $AccountID;
            }));

            return $account;
        }

        public function GetStaffCountInProject($ProjectID){
            
            $actionDB = new ActionDB();

            $result = $actionDB->StaffCountInProject($ProjectID);
            $row = $result->fetch_assoc();

            $staffCount = $row['staffCountInProject'];

            return $staffCount;
        }
    }
}