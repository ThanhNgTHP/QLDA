<?php 
    if(!class_exists('Project')){
        include_once getenv('DIR_DB') . '/ActionDB.php';
        include_once getenv('DIR_MODELS') . '/Image.php';
        include_once getenv('DIR_MODELS') . '/JoinStaff.php';
        include_once getenv('DIR_MODELS') . '/ProjectCategory.php';

        class Project{

            /** @var int $ID */
            public $ID;

            /** @var int $Name */
            public $Name;

            /** @var Date $Begin */
            public $Begin;

            /** @var Date $End */    
            public $End;

            /** @var string $Status */    
            public $Status;

            /** @var string $Contact */
            public $Contact;
    
            /** @var string $Description */
            public $Description;
    
            /** @var int $ProjectCategoryID */
            public $ProjectCategoryID;

            /**
             * Lấy ra danh sách ảnh thuộc dự án
             *
             * @return Image[]
             */
            public function GetImages(){
                $action = new ActionDB();
                $result = $action->ProjectImageInfo($this->ID);
                
                $images = array();

                while($row = $result->fetch_assoc()) {
                    $image = new Image();
    
                    $image->ID = $row['ID'];
                    $image->Name = $row['Name'];
                    $image->Path = $row['Path'];
                    $image->ProjectID = $row['ProjectID'];
    
                    $images[] = $image;
                }
    
                return $images;
            }

            /**
             * Lấy ra danh sách thành viên tham gia thuộc dự án
             *
             * @return JoinStaff[]
             */
            public function GetStaffJoinProject(){
                $action = new ActionDB();
                $result = $action->GetStaffJoinProject($this->ID);
    
                $joinStaffs = array();
    
                while($row = $result->fetch_assoc()) {
                    $joinStaff = new class {
                        public $StaffID;
                        public $ProjectID;
                    };
    
                    $joinStaff->StaffID = $row['StaffID'];
                    $joinStaff->ProjectID = $row['ProjectID'];
    
                    $joinStaffs[] = $joinStaff;
                }
                return $joinStaffs;
            }
            public static function GetAllProject() { 
                $actionDB = new ActionDB();
    
                $result = $actionDB->ProjectAllInfo();
    
                $projectAll = array();

                while($row = $result->fetch_assoc()){
                
                    $project = new Project();
                    $project->ID = $row['ID'];
                    $project->Name = $row['Name'];
                    $project->Begin = $row['Begin'];
                    $project->End = $row['End'];
                    $project->Status = $row['Status'];
                    $project->Contact = $row['Contact'];
                    $project->Description = $row['Description'];
                    
                    $project->ProjectCategoryID = $row['ProjectCategoryID'];
    
                    $projectAll[] = $project;
                }

                return $projectAll;
            }
            
            /**
             * Lấy ra loại dự án dựa trên mã loại dự án
             *
             * @return ProjectCategory
             */
            public function GetProjectProjectCategory(){
                $ProjectCategoryID = $this->ProjectCategoryID;
                [$projectCategory] = array_values(array_filter(ProjectCategory::GetAllProjectCategory(), function ($projectCategory) use ($ProjectCategoryID){
                    return $projectCategory->ID == $ProjectCategoryID;
                }));

                return $projectCategory;
            }
        }
    }
?>