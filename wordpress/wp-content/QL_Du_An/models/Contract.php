<?php 
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Project.php';
    include_once getenv('DIR_MODELS') . '/Partner.php';

    if(!class_exists('Contract')){
        class Contract{
            /**
             * @var int $ID
             */
            public $ID;
            
            /**
             * @var string $Name
             */
            public $Name;
    
            /**
             * @var int $Number
             */
            public $Number;
    
            /**
             * @var Date $SignDay
             */
            public $SignDay;
    
            /**
             * @var Date $Expire
             */
            public $Expire;
    
            /**
             * @var string $Note
             */
            public $Note;
    
            /**
             * @var float $Value
             */
            public $Value;
    
            /**
             * @var string $Status
             */
            public $Status;
    
            /** @var int $PartnerID */
            public $PartnerID;
           
            /** @var int $ProjectID */
            public $ProjectID;

            public static function GetAllContract(){
                $actionDB = new ActionDB();
    
                $result = $actionDB->ContractAllInfo();
    
                $contractAll = array();
    
                while($row = $result->fetch_assoc()){
                    $contract = new Contract();
    
                    $contract->ID = $row['ID'];
                    $contract->Name = $row['Name'];
                    $contract->Number = $row['Number'];
                    $contract->SignDay = $row['SignDay'];
                    $contract->Expire = $row['Expire'];
                    $contract->Note = $row['Note'];
                    $contract->Value = $row['Value'];
                    $contract->Status = $row['Status'];
                    $contract->PartnerID = $row['PartnerID'];
                    $contract->ProjectID = $row['ProjectID'];
                    
                    $contractAll[] = $contract;
                }
    
                return $contractAll;
            }

            public function GetContractPartner(){
                $PartnerID = $this->PartnerID;
                [$partner] = array_values(array_filter(Partner::GetAllPartner(), function($partner) use($PartnerID){
                    return $partner->ID === $PartnerID;
                }));
    
                return $partner;
            }
            
            public function GetContractProject(){
                $ProjectID = $this->ProjectID;
                [$project] = array_values(array_filter(Project::GetAllProject(), function($project) use($ProjectID){
                    return $project->ID === $ProjectID;
                }));
    
                return $project;
            }

            /**
             * Lấy ra danh sách ảnh thuộc hợp đồng
             *
             * @return Image[]
             */
            public function GetImages(){
                $action = new ActionDB();
                $result = $action->ContractImageInfo($this->ID);
                
                $images = array();

                while($row = $result->fetch_assoc()) {
                    $image = new Image();
    
                    $image->ID = $row['ID'];
                    $image->Name = $row['Name'];
                    $image->Path = $row['Path'];
                    $image->ProjectID = $row['ContractID'];
    
                    $images[] = $image;
                }
    
                return $images;
            }
        }
    }


?>