<?php 
if(!class_exists('ProjectCategory')){

    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Project.php';
    class ProjectCategory{
        
        /** @var int $ID */
        public $ID;

        /** @var string $Name */
        public $Name;

        /** @var string $Description */
        public $Description;

        /**
         * Lấy ra danh sách dự án thuộc loại dự án
         *
         * @return Projects[]
         */
        public function GetProjectCategoryProjects(){
            $action = new ActionDB();
            $result = $action->ProjectCategoryProjectsInfo($this->ID);

            $projects = array();

            while($row = $result->fetch_assoc()) {
                $project = new Project();

                $project->ID = $row['ID'];
                $project->Name = $row['Name'];
                $project->Begin = $row['Begin'];
                $project->End = $row['End'];
                $project->Status = $row['Status'];
                $project->Contact = $row['Contact'];
                $project->Description = $row['Description'];
                $project->ProjectCategoryID = $row['ProjectCategoryID'];

                $projects[] = $project;
            }

            return $projects;
        }

        public static function GetAllProjectCategory() { 
            $actionDB = new ActionDB();

            $result = $actionDB->ProjectCategoryAllInfo();

            $projectCategoryAll = array();
            
            while($row = $result->fetch_assoc()){
                $Category = new ProjectCategory();
                $Category->ID = $row['ID'];
                $Category->Name = $row['Name'];
                $Category->Description = $row['Description'];
                
                $projectCategoryAll[] = $Category;
            }

            return $projectCategoryAll;
        } 
    }

}
    
?>