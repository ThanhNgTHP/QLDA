<?php 
    if(!class_exists('Job')){
        include_once getenv('DIR_DB') . '/ActionDB.php';
        include_once getenv('DIR_MODELS') . '/Team.php';
        include_once getenv('DIR_MODELS') . '/Project.php';
        include_once getenv('DIR_MODELS') . '/Staff.php';
        class Job{
            /** @var int $ID */
            public  $ID;

            /** @var string $Name */
            public  $Name;

            /** @var string $Content */
            public  $Content;

            /** @var string $Note */
            public  $Note;

            /** @var Date $Begin */
            public  $Begin;

            /** @var Date $End */
            public  $End;

            /** @var int $TeamID */
            public  $TeamID;

            /** @var int $ProjectID */
            public  $ProjectID;

            /** @var int $Progress */
            public  $Progress;

            /** @var int $Priority */
            public  $Priority;
            
            /** @var int $TargetBudget */
            public  $TargetBudget;

            /** @var int $ActualBudget */
            public  $ActualBudget;

            /** @var int $StaffID */
            public  $StaffID;


            /**
             * Lấy ra tất cả công việc
             *
             * @return Job[]
             */

            public static function GetAllJob(){
                $actionDB = new ActionDB();
    
                $result = $actionDB->JobAllInfo();

                $jobAll = array();
    
                while($row = $result->fetch_assoc()){
                    $job = new Job();
    
                    $job->ID = $row['ID'];
                    $job->Name = $row['Name'];
                    $job->Content = $row['Content'];
                    $job->Note = $row['Note'];
                    $job->Begin = $row['Begin'];
                    $job->End = $row['End'];
                    $job->TeamID = $row['TeamID'];
                    $job->ProjectID = $row['ProjectID'];
                    $job->Progress = $row['Progress'];
                    $job->Priority = $row['Priority'];
                    $job->TargetBudget = $row['TargetBudget'];
                    $job->ActualBudget = $row['ActualBudget'];
                    $job->StaffID = $row['StaffID'];
                    
                    $jobAll[] = $job;
                }

                return $jobAll;
            }

            public static function GetJobsByProjectID($projectID){
                $actionDB = new ActionDB();

                $result = $actionDB->JobAllInfo();

                $jobsByProject = array();

                while($row = $result->fetch_assoc()){
                    if ($row['ProjectID'] == $projectID) {
                        $job = new Job();
                
                        $job->ID = $row['ID'];
                        $job->Name = $row['Name'];
                        $job->Content = $row['Content'];
                        $job->Note = $row['Note'];
                        $job->Begin = $row['Begin'];
                        $job->End = $row['End'];
                        $job->TeamID = $row['TeamID'];
                        $job->ProjectID = $row['ProjectID'];
                        $job->Progress = $row['Progress'];
                        $job->Priority = $row['Priority'];
                        $job->TargetBudget = $row['TargetBudget'];
                        $job->ActualBudget = $row['ActualBudget'];
                        $job->StaffID = $row['StaffID'];
                                
                        $jobsByProject[] = $job;
                    }
                }

                return $jobsByProject;
            }


            public function GetTeam(){
                $TeamID = $this->TeamID;
                [$team] = array_values(array_filter(Team::GetAllTeam(), function ($team) use ($TeamID){
                    return $team->ID == $TeamID;
                }));

                return $team;
            }

            public function JobProject(){
                $ProjectID = $this->ProjectID;
                [$project] = array_values(array_filter(Project::GetAllProject(), function ($project) use ($ProjectID){
                    return $project->ID == $ProjectID;
                }));

                return $project;
            }

            public function GetStaffProject(){
                $StaffID = $this->StaffID;
                $jobs = array_values(array_filter(Job::GetAllJob(), function ($job) use ($StaffID){
                    return $job->StaffID == $StaffID;
                }));

                return $jobs;
            }
        }  
    }
?>