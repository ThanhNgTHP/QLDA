<?php 
if(!class_exists('Event')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    // include_once getenv('DIR_MODELS') . '/Staff.php';
    // include_once getenv('DIR_MODELS') . '/Department.php';
    include_once getenv('DIR_MODELS') . '/Project.php';

    class Event{
        /**
         * @var int $ID
         */
        public $ID;

        /**
         * @var string $Name
         */
        public $Name;

        /**
         * @var string $Image
         */
        public $Image;

        /**
         * @var int $Note
         */
        public $Note;

                /**
         * @var int $Content
         */
        public $Content;

                /**
         * @var int $ProjectID
         */
        public $ProjectID;

        /**
         * Lấy ra danh sách thành viên trong nhóm
         *
         * @return Event[]
         */

        public static function GetAllEvent(){
            $actionDB = new ActionDB();

            $result = $actionDB->EventAllInfo();

            $eventAll = array();
            // exit;

            while($row = $result->fetch_assoc()){
                $event = new event();

                $event->ID = $row['ID'];
                $event->Name = $row['Name'];
                $event->Image = $row['Image'];
                $event->Note = $row['Note'];
                $event->Content = $row['Content'];                    
                $event->ProjectID = $row['ProjectID'];                    
                $eventAll[] = $event;
            }

            return $eventAll;
        }

        public function GetProject(){
            $ProjectID = $this->ProjectID;
            [$project] = array_values(array_filter(Project::GetAllProject(), function ($project) use ($ProjectID){
                return $project->ID == $ProjectID;
            }));

            return $project;
        }

        public function Add($name, $image, $note, $content, $projectID){
            $actionDB = new ActionDB();
            $actionDB->AddEvent($name, $image, $note, $content, $projectID);
        }

        public function Edit($id, $name, $image, $note, $content, $projectID){
            $actionDB = new ActionDB();
            $actionDB->EditEvent($id, $name, $image, $note, $content, $projectID);
        }
        
        public function Delete($id){
            $actionDB = new ActionDB();
            $actionDB->DeleteEvent($id);
        }            

        public function Find($name){
            $actionDB = new ActionDB();

            $result = $actionDB->FindEvent($name);

            $findEvents = array();

            while($row = $result->fetch_assoc()){
                $event = new event();

                $event->ID = $row['ID'];
                $event->Name = $row['Name'];
                $event->Image = $row['Image'];
                $event->Note = $row['Note'];
                $event->Content = $row['Content'];                    
                $event->ProjectID = $row['ProjectID'];                    
                $findEvents[] = $event;
            }

            return $findEvents;
        }


    }
}
    
?>