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
        }
    }