<?php 
if(!class_exists('ProjectSummary')){
    include_once getenv('DIR_MODELS') . '/Project.php';
    include_once getenv('DIR_MODELS') . '/Staff.php';
    include_once getenv('DIR_MODELS') . '/Image.php';
    include_once getenv('DIR_MODELS') . '/Contract.php';
    include_once getenv('DIR_MODELS') . '/Partner.php';
    include_once getenv('DIR_MODELS') . '/ProjectCategory.php';

    class ProjectSummary{
        /** @var int $ProjectID */
        public $ProjectID;

        /** @var int $StaffCount */
        public $StaffCount;

        /** @var string $ProjectName */
        public $ProjectName;

        /** @var string $ContractNumber */
        public $ContractNumber;

        /** @var string $PartnerName */
        public $PartnerName;

        /** @var string $Description */
        public $Description;

        /** @var string $ProjectCategoryName */
        public $ProjectCategoryName;

        /** @var Image $Image */
        public $Image;

        /** @var Image $ProjectProgress */
        public $ProjectProgress;

        public static function GetAllProjectSummary(){

            $actionDB = new ActionDB();
            
            $projectAll = Project::GetAllProject();
            
            $ProjectSummaryAll = array();

            foreach($projectAll as $key => $project){
                $projectSummary = new ProjectSummary();

                $projectSummary->ProjectID = $project->ID;
                $projectSummary->ProjectName = $project->Name;
                $projectSummary->ProjectProgress = $project->Progress;
                
                $staff = new Staff();
                $projectSummary->StaffCount = $staff->GetStaffCountInProject($project->ID);

                [$contract] = array_values(array_filter(Contract::GetAllContract(), function ($contract) use ($projectSummary){
                    return $contract->ProjectID == $projectSummary->ProjectID;
                }));
                $projectSummary->ContractNumber = $contract->Number;

                [$partner] = array_values(array_filter(Partner::GetAllPartner(), function ($partner) use ($contract){
                    return $partner->ID == $contract->PartnerID;
                }));
                $projectSummary->PartnerName = $partner->Name;

                [$projectCategory] = array_values(array_filter(ProjectCategory::GetAllProjectCategory(), function ($projectCategory) use ($projectSummary){
                    return $projectCategory->ID == $projectSummary->ProjectID;
                }));
                $projectSummary->ProjectCategoryName = $projectCategory->Name;

                $projectSummary->Description = $project->Description;
                
                [$image] = array_values(array_filter(Image::GetAllImage(), function ($image) use ($projectSummary){
                    return $image->ProjectID == $projectSummary->ProjectID;
                }));
                $projectSummary->Image = $image;

                $ProjectSummaryAll[] = $projectSummary;
            }
            
            return $ProjectSummaryAll;
        }

        public static function GetProjectsSummaryWhereProjectCategoryID($projectCategoryID){
            $actionDB = new ActionDB();
            
            $projectAll = Project::GetAllProject();
            
            $ProjectSummaryAll = array();

            foreach($projectAll as $key => $project){
                if( $project->GetProjectProjectCategory()->ID === $projectCategoryID){
                    $projectSummary = new ProjectSummary();

                    $projectSummary->ProjectID = $project->ID;
                    $projectSummary->ProjectName = $project->Name;
                    $projectSummary->ProjectProgress = $project->Progress;

                    $staff = new Staff();
                    $projectSummary->StaffCount = $staff->GetStaffCountInProject($project->ID);
                    

                    [$contract] = array_values(array_filter(Contract::GetAllContract(), function ($contract) use ($projectSummary){
                        return $contract->ProjectID == $projectSummary->ProjectID;
                    }));
                    $projectSummary->ContractNumber = $contract->Number;

                    [$partner] = array_values(array_filter(Partner::GetAllPartner(), function ($partner) use ($contract){
                        return $partner->ID == $contract->PartnerID;
                    }));
                    $projectSummary->PartnerName = $partner->Name;

                    [$projectCategory] = array_values(array_filter(ProjectCategory::GetAllProjectCategory(), function ($projectCategory) use ($projectSummary){
                        return $projectCategory->ID == $projectSummary->ProjectID;
                    }));
                    $projectSummary->ProjectCategoryName = $projectCategory->Name;

                    $projectSummary->Description = $project->Description;
                    
                    [$image] = array_values(array_filter(Image::GetAllImage(), function ($image) use ($projectSummary){
                        return $image->ProjectID == $projectSummary->ProjectID;
                    }));
                    $projectSummary->Image = $image;

                    $ProjectSummaryAll[] = $projectSummary;
                }
            }
            
            return $ProjectSummaryAll;
        }

        public static function FindProjectsSummaryWhereName($projectSummaryName){
            $actionDB = new ActionDB();
            
            $projectAll = Project::GetAllProject();
            $ProjectSummaryAll = array();

            foreach($projectAll as $key => $project){
                if(str_contains(strtolower($project->Name), strtolower($projectSummaryName))){
                    $projectSummary = new ProjectSummary();

                    $projectSummary->ProjectID = $project->ID;
                    $projectSummary->ProjectName = $project->Name;
                    $projectSummary->ProjectProgress = $project->Progress;

                    $staff = new Staff();
                    $projectSummary->StaffCount = $staff->GetStaffCountInProject($project->ID);

                    [$contract] = array_values(array_filter(Contract::GetAllContract(), function ($contract) use ($projectSummary){
                        return $contract->ProjectID == $projectSummary->ProjectID;
                    }));
                    $projectSummary->ContractNumber = $contract->Number;

                    [$partner] = array_values(array_filter(Partner::GetAllPartner(), function ($partner) use ($contract){
                        return $partner->ID == $contract->PartnerID;
                    }));
                    $projectSummary->PartnerName = $partner->Name;

                    [$projectCategory] = array_values(array_filter(ProjectCategory::GetAllProjectCategory(), function ($projectCategory) use ($projectSummary){
                        return $projectCategory->ID == $projectSummary->ProjectID;
                    }));
                    $projectSummary->ProjectCategoryName = $projectCategory->Name;

                    $projectSummary->Description = $project->Description;
                    
                    [$image] = array_values(array_filter(Image::GetAllImage(), function ($image) use ($projectSummary){
                        return $image->ProjectID == $projectSummary->ProjectID;
                    }));
                    $projectSummary->Image = $image;

                    $ProjectSummaryAll[] = $projectSummary;
                }
            }
            
            return $ProjectSummaryAll;
        }
    }
}
?>

<?php
    include 'base_controllers.php';

/**
 * @var ProjectSummary[]
 */
$projectSummaryAll = [];

$projectCategoryID = $_GET['projectCategoryID'] ?? null;
if(isset($projectCategoryID)){
    $projectSummaryAll = ProjectSummary::GetProjectsSummaryWhereProjectCategoryID((int)$projectCategoryID);
}
else{
    $projectSummaryAll = ProjectSummary::GetAllProjectSummary();
}
?>


