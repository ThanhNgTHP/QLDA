<?php 

    include getenv('DIR_MODELS') . '/permission.php';
    $permissions = Permission::GetAllPermission();

?>