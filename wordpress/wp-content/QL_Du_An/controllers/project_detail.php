<?php 
if(!class_exists('ProjectDetail')){
    include_once getenv('DIR_MODELS') . '/Project.php';
    include_once getenv('DIR_MODELS') . '/ProjectCategory.php';
    include_once getenv('DIR_MODELS') . '/Contract.php';
    include_once getenv('DIR_MODELS') . '/Partner.php';
    include_once getenv('DIR_MODELS') . '/Image.php';
    include_once getenv('DIR_MODELS') . '/Job.php';
    class ProjectDetail{

        /** @var Project $Project */
        public $Project;

        /** @var ProjectCategory $ProjectCategory */
        public $ProjectCategory;

        /** @var Contract $Contract */
        public $Contract;

        /** @var Partner $Partner */
        public $Partner;

        /** @var Partner $Job */
        public $Jobs;

        public function __construct($projectID){
            [$Project] = array_values(array_filter(Project::GetAllProject(), function($project) use($projectID){
                return $project->ID === $projectID;
            }));
            $this->Project = $Project;

            $ProjectCategory = array_values(array_filter(ProjectCategory::GetAllProjectCategory(), function($projectCategory) use($Project){
                return $Project->ProjectCategoryID === $projectCategory->ID;
            }));
            if(count($ProjectCategory) > 0){
                $this->ProjectCategory = $ProjectCategory[0];
            }
            else {
                $this->ProjectCategory = null;
            }

            $Contract = array_values(array_filter(Contract::GetAllContract(), function($contract) use($Project){
                return $Project->ID === $contract->ProjectID;
            }));
            if(count($Contract) > 0){
                $this->Contract = $Contract[0];
            }
            else {
                $this->Contract = null;
            }

            if(isset($this->Contract)){
                $Partner = array_values(array_filter(Partner::GetAllPartner(), function($partner) use($Contract){
                    return $partner->ID === $Contract[0]->PartnerID;
                }));
                if(count($Partner) > 0){
                    $this->Partner = $Partner[0];
                }
                else {
                    $this->Partner = null;
                }
            }

            // [$Job] = array_values(array_filter(Job::GetAllJob(), function($job) use($Project){
            //     return $job->ProjectID === $Project->ID;
            // }));
            // $this->Jobs = $Job;            
        }
    }
}
    
?>

<?php
    include 'base_controllers.php';
    
    $projectID = $_GET['projectID'] ?? null;
    if(!isset($projectID)){
        $projectID = 1;
    }
    $projectDetail = new ProjectDetail((int)$projectID);
?>