<?php 
    include_once getenv('DIR_MODELS') . '/Event.php';
    include 'base_controllers.php';

    $eventID = $_GET['eventID'] ?? null;
    if(!isset($eventID)){
        // xử lý ngoại lệ
        exit;
    }
    
    $event = GetEvent($eventID);
    function GetEvent($eventID){
        [$Event] = array_values(array_filter(Event::GetAllEvent(), function($event) use ($eventID){
            return $event->ID == $eventID;
        }));

        return $Event;
    }  

?>