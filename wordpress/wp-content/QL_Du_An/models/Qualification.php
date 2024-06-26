<?php 
    if(!class_exists('Qualification')){
        include_once getenv('DIR_DB') . '/ActionDB.php';
        include_once getenv('DIR_MODELS') . '/Staff.php';
        class Qualification{

            /** @var int $ID */
            public $ID;
    
            /** @var string $Name */
            public $Name;
    
            /** @var Date $Date */
            public $Date;
    
            /** @var string $Address */
            public $Address;
    
            /** @var string $StaffID */
            public $StaffID;

            public static function GetAllQualification() { 
                $actionDB = new ActionDB();
    
                $result = $actionDB->QualificationAllInfo();
    
                $qualificationAll = array();
    
                while($row = $result->fetch_assoc()) {
                    $qualification = new Qualification();
    
                    $qualification->ID = $row['ID'];
                    $qualification->Name = $row['Name'];
                    $qualification->Date = $row['Date'];
                    $qualification->Address = $row['Address'];
                    $qualification->StaffID = $row['StaffID'];
    
                    $qualificationAll[] = $qualification;
                }
    
                return $qualificationAll;
            }

            public function QualificationStaff(){
                $StaffID = $this->StaffID;
                [$staff] = array_values(array_filter(Staff::GetAllStaff(), function ($staff) use ($StaffID){
                    return $staff->ID == $StaffID;
                }));

                return $staff;
            }

            public function Add($name, $date, $address, $staffID){
                $actionDB = new ActionDB();
                $actionDB->AddQualification($name, $date, $address, $staffID);
            }

            public function Edit($id, $name, $date, $address, $staffID){
                $actionDB = new ActionDB();
                $actionDB->EditQualification($id, $name, $date, $address, $staffID);
            }
            
            public function Delete($id){
                $actionDB = new ActionDB();
                $actionDB->DeleteQualification($id);
            }            

            public function Find($name){
                $actionDB = new ActionDB();
    
                $result = $actionDB->FindQualification($name);
    
                $findQualifications = array();
    
                while($row = $result->fetch_assoc()) {
                    $qualification = new Qualification();
    
                    $qualification->ID = $row['ID'];
                    $qualification->Name = $row['Name'];
                    $qualification->Date = $row['Date'];
                    $qualification->Address = $row['Address'];
                    $qualification->StaffID = $row['StaffID'];
    
                    $findQualifications[] = $qualification;
                }
    
                return $findQualifications;
            }
        }
    }