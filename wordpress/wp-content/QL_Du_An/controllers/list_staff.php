<?php 
include_once getenv('DIR_MODELS') . '/Staff.php';
include 'base_controllers.php';

$Staff = new Staff();
$Staffs = $Staff->GetAllStaff();

?>