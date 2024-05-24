<?php 
if(!class_exists('Task')){
    include_once getenv('DIR_DB') . '/ActionDB.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    // include_once getenv('DIR_MODELS') . '/Department.php';
    include_once getenv('DIR_MODELS') . '/Job.php';

    class Task{
        /**
         * @var int $ID
         */
        public $ID;

        /**
         * @var string $Name
         */
        public $Name;

        /**
         * @var string $Content
         */
        public $Content;

        /**
         * @var int $Complete
         */
        public $Complete;

                /**
         * @var int $Priority
         */
        public $Priority;

                /**
         * @var int $Begin
         */
        public $Begin;

                /**
         * @var int $End
         */
        public $End;

                /**
         * @var int $TargetBudget
         */
        public $TargetBudget;

                /**
         * @var int $StaffID
         */
        public $StaffID;

                /**
         * @var int $JobID
         */
        public $JobID;

                /**
         * @var int $ActualBudget
         */
        public $ActualBudget;

        /**
         * Lấy ra danh sách nhiệm vụ
         *
         * @return task[]
         */

        public static function GetAllTask(){
                $actionDB = new ActionDB();
    
                $result = $actionDB->TaskAllInfo();

                $taskAll = array();
                // exit;
    
                while($row = $result->fetch_assoc()){
                    $task = new task();
    
                    $task->ID = $row['ID'];
                    $task->Name = $row['Name'];
                    $task->Content = $row['Content'];
                    $task->Complete = $row['Complete'];
                    $task->Priority = $row['Priority'];
                    $task->Begin = $row['Begin'];
                    $task->End = $row['End'];
                    $task->TargetBudget = $row['TargetBudget'];
                    $task->StaffID = $row['StaffID'];
                    $task->JobID = $row['JobID'];
                    $task->ActualBudget = $row['ActualBudget'];
                    
                    $taskAll[] = $task;
                }

                return $taskAll;
            }
    }
}
    
?>