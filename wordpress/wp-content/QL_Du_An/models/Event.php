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
         * @return allevent[]
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
    }
}
    
?>