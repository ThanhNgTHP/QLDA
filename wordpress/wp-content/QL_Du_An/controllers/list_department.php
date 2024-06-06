<?php 
include_once getenv('DIR_MODELS') . '/Department.php';
include 'base_controllers.php';

$Department = new Department();
$Departments = $Department->GetAllDepartment();

?>