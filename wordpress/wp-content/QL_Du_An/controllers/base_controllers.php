<?php
    include getcwd().'/wp-content/QL_Du_An/enviroment_variables.php';
?>

<?php 
    if(IsRedirect()){
        die();
    }    
?>

<?php
    function IsRedirect(){
        
        $login_url = home_url()."/login/";
        $current_url = getenv('URL');

        $usernameInfo = $_COOKIE['username'] ?? null;
        
        if($login_url === $current_url && isset($usernameInfo)){

            

            header("Location: ".home_url().'/home/');
            return true;
        }
        else if($login_url !== $current_url && !isset($usernameInfo)){
            header("Location: ".home_url().'/login/');
            return true;
        }

        return false;
    }

?>