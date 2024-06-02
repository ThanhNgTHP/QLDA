<?php 
include_once getenv('DIR_MODELS') . '/Event.php';
include 'base_controllers.php';

$Event = new Event();
$Events = $Event->GetAllEvent();

?>