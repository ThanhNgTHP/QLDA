<?php 
if(!class_exists('ProjectDetail')){
    include_once getenv('DIR_MODELS') . '/Project.php';
    include_once getenv('DIR_MODELS') . '/ProjectCategory.php';
    include_once getenv('DIR_MODELS') . '/Contract.php';
    include_once getenv('DIR_MODELS') . '/Partner.php';
    include_once getenv('DIR_MODELS') . '/Image.php';
    class ProjectDetail{

        /** @var Project $Project */
        public $Project;

        /** @var ProjectCategory $ProjectCategory */
        public $ProjectCategory;

        /** @var Contract $Contract */
        public $Contract;

        /** @var Partner $Partner */
        public $Partner;

        public function __construct($projectID){
            [$Project] = array_values(array_filter(Project::GetAllProject(), function($project) use($projectID){
                return $project->ID === $projectID;
            }));
            $this->Project = $Project;

            [$ProjectCategory] = array_values(array_filter(ProjectCategory::GetAllProjectCategory(), function($projectCategory) use($Project){
                return $Project->ID === $projectCategory->ID;
            }));
            $this->ProjectCategory = $ProjectCategory;

            [$Contract] = array_values(array_filter(Contract::GetAllContract(), function($contract) use($Project){
                return $Project->ID === $contract->ProjectID;
            }));
            $this->Contract = $Contract;

            [$Partner] = array_values(array_filter(Partner::GetAllPartner(), function($partner) use($Contract){
                return $partner->ID === $Contract->PartnerID;
            }));
            $this->Partner = $Partner;
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