<?php 
    if($_SERVER['REQUEST_METHOD'] === 'GET'){
        include 'base_controllers.php';
        include getenv('DIR_MODELS') . '/Permission.php';
        include getenv('DIR_MODELS') . '/Account.php';
    }


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        header('Content-Type: application/json');

        spl_autoload_register(function ($class_name) {
		    include '../db/' . $class_name . '.php';
        });

        $actionDB = new ActionDB();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $result = $actionDB->VerifyAccount($username, $password);
        
        $loginInfo = array();

        while($row = $result->fetch_assoc()) {
            foreach ($row as $key => $value) {
                $loginInfo[$key] = $value;
            }
        }

        echo json_encode($loginInfo, JSON_UNESCAPED_UNICODE);
    }
?>