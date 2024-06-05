<?php 
    if(!class_exists('Image')){
        include_once getenv('DIR_DB') . '/ActionDB.php';
        include_once getenv('DIR_MODELS') . '/Project.php';
        class Image{

            /** @var int $ID */
            public  $ID;
    
            /** @var string $Name */
            public $Name;
    
            /** @var string $Path */
            public $Path;
    
            /** @var int $ProjectID */
            public $ProjectID;

            /** @var int $ContractID */
            public $ContractID;

            /** @var int $ImageCategory */
            public $ImageCategory;

            public static function GetAllImage(){
                $actionDB = new ActionDB();
        
                $result = $actionDB->ImageAllInfo();
    
                $imageAll = array();
    
                while($row = $result->fetch_assoc()){
                    $image = new Image();
    
                    $image->ID = $row['ID'];
                    $image->Name = $row['Name'];
                    $image->Path = $row['Path'];
                    $image->ProjectID = $row['ProjectID'];
                    $image->ContractID = $row['ContractID'];
                    $image->ImageCategory = $row['ImageCategory'];

                    $imageAll[] = $image;
                }
    
                return $imageAll;
            }

            /**
             * Lấy ra danh sách dự án có ảnh
             *
             * @return Project
             */
            public function GetImageProject(){
                $ProjectID = $this->ProjectID;
                [$project] = array_values(array_filter(Project::GetAllProject(), function ($project) use ($ProjectID){
                    return $project->ID == $ProjectID;
                }));

                return $project;
            }

            public function GetImageContract(){
                $ContractID = $this->ContractID;
                [$contract] = array_values(array_filter(Contract::GetAllContract(), function ($contract) use ($ContractID){
                    return $contract->ID == $ContractID;
                }));

                return $contract;
            }            

            public function Add($name, $path, $projectID, $contractID, $imageCategory){
                $actionDB = new ActionDB();
                $actionDB->AddImage($name, $path, $projectID, $contractID, $imageCategory);
            }

            public function Edit($id, $name, $path, $projectID, $contractID, $imageCategory){
                $actionDB = new ActionDB();
                $actionDB->EditImage($id, $name, $path, $projectID, $contractID, $imageCategory);
            }
            
            public function Delete($id){
                $actionDB = new ActionDB();
                $actionDB->DeleteImage($id);
            }            

            public function Find($name){
                $actionDB = new ActionDB();
        
                $result = $actionDB->FindImage($name);
    
                $findImages = array();
    
                while($row = $result->fetch_assoc()){
                    $image = new Image();
    
                    $image->ID = $row['ID'];
                    $image->Name = $row['Name'];
                    $image->Path = $row['Path'];
                    $image->ProjectID = $row['ProjectID'];
                    $image->ContractID = $row['ContractID'];
                    $image->ImageCategory = $row['ImageCategory'];

                    $findImages[] = $image;
                }
    
                return $findImages;
            }
            
        }
    }