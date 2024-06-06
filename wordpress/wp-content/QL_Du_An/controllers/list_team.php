<?php 
include_once getenv('DIR_MODELS') . '/Team.php';
include 'base_controllers.php';

$Team = new Team();
$Teams = $Team->GetAllTeam();

?>