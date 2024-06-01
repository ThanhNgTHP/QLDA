<?php 
    include_once getenv('DIR_DB') . '/ActionDB.php';

    $projectID = $_GET['projectID'] ?? null;
    if(!isset($projectID)){
        // xử lý ngoại lệ
        exit;
    }
    echo $projectID;
?>