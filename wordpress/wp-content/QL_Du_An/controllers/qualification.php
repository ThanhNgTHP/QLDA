<?php 

    include getenv('DIR_MODELS') . '/qualification.php';
    $qualifications = Qualification::GetAllQualification();
?>