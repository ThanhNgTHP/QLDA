<?php 
    $eventID = $_GET['eventID'] ?? null;
    if(!isset($projectID)){
        // xử lý ngoại lệ
        exit;
    }

    echo $eventID;
?>