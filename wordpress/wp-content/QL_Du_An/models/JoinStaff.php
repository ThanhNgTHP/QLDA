<?php 

    // if(!class_exists('JoinStaff')){
    //     include_once getenv('DIR_DB') . '/ActionDB.php';
    //     include_once getenv('DIR_MODELS') . '/Staff.php';


    //     class JoinStaff{
    //         /** @var int $ID */
    //         public $ID;

    //         /** @var int $StaffID */
    //         public $StaffID;

    //         /** @var int $ProjectID */
    //         public $ProjectID;

    //         public function GetCountStaff(){
    //             $actionDB = new ActionDB();

    //             $result = $actionDB->StaffCountInProject($this->ProjectID);

    //             $row = $result->fetch_assoc();

    //             $staffCount = $row['staffCountInProject'];

    //             return $staffCount;
    //         }

    //         public function GetJoinStaffProject(){
    //             $ProjectID = $this->ProjectID;
    //             [$project] = array_values(array_filter(Project::GetAllProject(), function ($project) use ($ProjectID){
    //                 return $project->ID == $ProjectID;
    //             }));

    //             return $project;
    //         }

    //         public function GetJoinStaffStaff(){
    //             $StaffID = $this->StaffID;
    //             [$staff] = array_values(array_filter(Staff::GetAllStaff(), function ($staff) use ($StaffID){
    //                 return $staff->ID == $StaffID;
    //             }));

    //             return $staff;
    //         }

    //         public static function GetAllJoinStaff(){
    //             $actionDB = new ActionDB();
    
    //             $result = $actionDB->JoinStaffAllInfo();

    //             $joinStaffAll = array();
    
    //             while($row = $result->fetch_assoc()){
    //                 $joinStaff = new JoinStaff();
    
    //                 $joinStaff->ID = $row['ID'];
    //                 $joinStaff->StaffID = $row['StaffID'];
    //                 $joinStaff->ProjectID = $row['ProjectID'];
                    
    //                 $joinStaffAll[] = $joinStaff;
    //             }

    //             return $joinStaffAll;
    //         }
    //     }
    // }

?>